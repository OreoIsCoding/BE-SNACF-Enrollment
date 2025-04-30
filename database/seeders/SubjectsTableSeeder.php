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
        ];

        foreach ($subjects as $subject) {
            Subject::create($subject);
        }
    }
}
