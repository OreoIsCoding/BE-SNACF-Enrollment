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

        $grouped = $courseSubjects->groupBy(fn($item) => $item->course->name)
            ->map(function ($items) {
                return $items->groupBy(fn($item) => $item->yearLevel->year)
                    ->map(function ($subjects) {
                        return $subjects->mapWithKeys(function ($subject) {
                            return [
                                $subject->subject->code => [
                                    'id' => $subject->subject->id,
                                    'code' => $subject->subject->code,
                                    'name' => $subject->subject->name,
                                    'units' => $subject->subject->units,
                                    'semester' => $subject->subject->semester,
                                    'created_at' => $subject->subject->created_at,
                                    'updated_at' => $subject->subject->updated_at,
                                ],
                            ];
                        });
                    });
            });

        return response()->json([
            'data' => $grouped
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

        $grouped = collect([$courseSubject])->groupBy(fn($item) => $item->course->name)
            ->map(function ($items) {
                return $items->groupBy(fn($item) => $item->yearLevel->year)
                    ->map(function ($subjects) {
                        return $subjects->mapWithKeys(function ($subject) {
                            return [
                                $subject->subject->code => [
                                    'id' => $subject->subject->id,
                                    'code' => $subject->code,
                                    'name' => $subject->subject->name,
                                    'units' => $subject->subject->units,
                                    'created_at' => $subject->subject->created_at,
                                    'updated_at' => $subject->subject->updated_at,
                                ],
                            ];
                        });
                    });
            });

        return response()->json([
            'data' => $grouped
        ]);
    }
}
