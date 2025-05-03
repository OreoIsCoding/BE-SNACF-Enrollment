<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\CourseSubject;
use App\Models\YearLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_number' => 'required|unique:students',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'gender' => 'required|in:Male,Female',
            'civil_status' => 'required',
            'birthday' => 'required|date',
            'contact_no' => 'required',
            'course_id' => 'required|exists:courses,id',
            'year' => 'required',
            'reference_number' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $student = Student::create($request->all());
        return response()->json(['message' => 'Student created successfully', 'data' => $student], 201);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:students,id',
            'student_number' => 'unique:students,student_number,' . $request->id,
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'gender' => 'required|in:Male,Female',
            'civil_status' => 'required',
            'birthday' => 'required|date',
            'contact_no' => 'required',
            'course_id' => 'required|exists:courses,id',
            'year' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $student = Student::find($request->id);
        $student->update($request->all());

        return response()->json(['message' => 'Student updated successfully', 'data' => $student]);
    }

    public function updateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:students,id',
            'status' => 'required|in:pending,approved,rejected'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $student = Student::find($request->id);
        $student->update(['status' => $request->status]);

        return response()->json(['message' => 'Status updated successfully', 'data' => $student]);
    }

    public function destroy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:students,id'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $student = Student::find($request->id);
        $student->update(['status' => 'deleted']);

        return response()->json(['message' => 'Student deleted successfully']);
    }

    public function index(Request $request)
    {
        $query = Student::with('course')->where('status', '!=', 'deleted');

        $status = $request->input('status');

        if ($status) {
            $query->where('status', $request->status);
        }

        $students = $query->get();
        return response()->json(['data' => $students]);
    }

    public function show(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'sometimes|exists:students,id',
            'reference_number' => 'sometimes|exists:students,reference_number',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if (!$request->has('id') && !$request->has('reference_number')) {
            return response()->json(['message' => 'Either id or reference_number must be provided'], 400);
        }

        $student = Student::with('course')
            ->when($request->has('id'), fn($query) => $query->where('id', $request->id))
            ->when($request->has('reference_number'), fn($query) => $query->where('reference_number', $request->reference_number))
            ->first();

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $yearLevel = YearLevel::where('year', $student->year)->first();

        if (!$yearLevel) {
            return response()->json(['message' => 'Year level not found'], 404);
        }

        $courseSubjects = CourseSubject::with(['subject', 'yearLevel'])
            ->where('year_id', $yearLevel->id)
            ->get();

        $groupedSubjects = $courseSubjects->groupBy(fn($item) => $item->yearLevel->year)
            ->map(function ($subjects) {
                return $subjects->mapWithKeys(function ($subject) {
                    return [
                        $subject->subject->code => [
                            'id' => $subject->subject->id,
                            'code' => $subject->subject->code,
                            'name' => $subject->subject->name,
                            'units' => $subject->subject->units,
                            'created_at' => $subject->subject->created_at,
                            'updated_at' => $subject->subject->updated_at,
                        ],
                    ];
                });
            });

        return response()->json([
            'student' => $student,
            'subjects' => $groupedSubjects
        ]);
    }
}
