<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CourseSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseSubjectController extends Controller
{
    public function index(Request $request)
    {
        $query = CourseSubject::with(['course', 'subject', 'yearLevel']);

        if ($request->has('status')) {
            $query->where('status', $request->status);
        }

        if ($request->has('course_id')) {
            $query->where('course_id', $request->course_id);
        }

        if ($request->has('year_id')) {
            $query->where('year_id', $request->year_id);
        }

        $courseSubjects = $query->get();

        return response()->json([
            'data' => $courseSubjects
        ]);
    }

    public function show(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:course_subjects,id'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $courseSubject = CourseSubject::with(['course', 'subject', 'yearLevel'])
            ->find($request->id);

        return response()->json([
            'data' => $courseSubject
        ]);
    }
}
