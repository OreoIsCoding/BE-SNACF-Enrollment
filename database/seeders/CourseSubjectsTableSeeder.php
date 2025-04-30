<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Subject;
use App\Models\YearLevel;
use App\Models\CourseSubject;

class CourseSubjectsTableSeeder extends Seeder
{
    public function run(): void
    {
        $courseIds = Course::pluck('id');
        $subjectIds = Subject::pluck('id');
        $yearIds = YearLevel::pluck('id');

        foreach ($courseIds as $courseId) {
            foreach ($subjectIds as $subjectId) {
                CourseSubject::create([
                    'course_id' => $courseId,
                    'subject_id' => $subjectId,
                    'year_id' => $yearIds->random(),
                    'status' => 'active',
                ]);
            }
        }
    }
}
