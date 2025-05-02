<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectsTableSeeder extends Seeder
{
    public function run(): void
    {
        $subjects = [
            ['code' => 'CS101', 'name' => 'Introduction to Programming', 'units' => 3],
            ['code' => 'CS102', 'name' => 'Data Structures', 'units' => 3],
            ['code' => 'IT201', 'name' => 'Web Development', 'units' => 3],
            ['code' => 'IS301', 'name' => 'Information Systems Analysis', 'units' => 3],
            ['code' => 'SE101', 'name' => 'Software Engineering Fundamentals', 'units' => 3],
            ['code' => 'DS101', 'name' => 'Introduction to Data Science', 'units' => 3],
            ['code' => 'GD101', 'name' => 'Game Design and Development', 'units' => 3],
            ['code' => 'AI101', 'name' => 'Artificial Intelligence Basics', 'units' => 3],
            ['code' => 'ML101', 'name' => 'Machine Learning Fundamentals', 'units' => 3],
            ['code' => 'DB101', 'name' => 'Database Management Systems', 'units' => 3],
            ['code' => 'WD101', 'name' => 'Web Application Development', 'units' => 3],
            ['code' => 'CS201', 'name' => 'Object-Oriented Programming', 'units' => 3],
            ['code' => 'CS202', 'name' => 'Algorithms and Complexity', 'units' => 3],
            ['code' => 'CS203', 'name' => 'Operating Systems', 'units' => 3],
        ];

        foreach ($subjects as $subject) {
            Subject::firstOrCreate($subject);
        }
    }
}
