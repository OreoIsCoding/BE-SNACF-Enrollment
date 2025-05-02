<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            'Bachelor of Science in Computer Science',
            'Bachelor of Science in Information Technology',
            'Bachelor of Science in Information Systems',
            'Bachelor of Science in Software Engineering',
            'Bachelor of Science in Data Science',
            'Bachelor of Science in Game Development',
        ];

        foreach ($courses as $course) {
            Course::firstOrCreate(['name' => $course]);
        }
    }
}
