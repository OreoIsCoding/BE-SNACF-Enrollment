<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Subject;
use App\Models\YearLevel;
use App\Models\CourseSubject;
use Illuminate\Support\Facades\Log;

class CourseSubjectsTableSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'BTLED-ICT' => [
                '1st Year' => [
                    ['code' => 'GE1',    'name' => 'Purposive Communication',                                                                    'units' => 3],
                    ['code' => 'GE2',    'name' => 'Reading In Philippine History',                                                             'units' => 3],
                    ['code' => 'GE3',    'name' => 'Mathematics in the Modern World',                                                          'units' => 3],
                    ['code' => 'GE4',    'name' => 'Art Appreciation',                                                                         'units' => 3],
                    ['code' => 'GE5',    'name' => 'Understanding the Self',                                                                   'units' => 3],
                    ['code' => 'GE6',    'name' => 'Gender and Society',                                                                       'units' => 3],
                    ['code' => 'GE7',    'name' => 'Philippine Popular Culture',                                                               'units' => 3],
                    ['code' => 'IA1',    'name' => 'Introduction to Industrial Arts Part 1',                                                    'units' => 3],
                    ['code' => 'PE1',    'name' => 'PATHFIT 1',                                                                                'units' => 2],
                    ['code' => 'NSTP1',  'name' => 'Civic Welfare Training Service 1',                                                         'units' => 3],
                ],
                '2nd Year' => [
                    ['code' => 'ProfED1','name' => 'Technology for Teaching & Learning 1',                                                    'units' => 3],
                    ['code' => 'ProfED2','name' => 'Foundation of Special & Inclusive Education',                                         'units' => 3],
                    ['code' => 'ProfED3','name' => 'Facilitating Learner-Centered Teaching: The Learner-Centered Approaches with Emphasis on Trainers Methodology 1','units'=>3],
                    ['code' => 'ProfED4','name' => 'The Child & Adolescent Learner & Learning Principles',                               'units' => 3],
                    ['code' => 'ICT3',   'name' => 'Computer System Servicing',                                                            'units' => 3],
                    ['code' => 'ICT4',   'name' => 'Troubleshooting Technique',                                                            'units' => 3],
                    ['code' => 'AF1',    'name' => 'Agri-Fishery Part 1',                                                                  'units' => 3],
                    ['code' => 'ICT1',   'name' => 'Introduction to ICT Specializations 1',                                               'units' => 3],
                    ['code' => 'PE3',    'name' => 'PATHFIT 3',                                                                                'units' => 2],
                ],
                '3rd Year' => [
                    ['code' => 'ProfED8','name' => 'Assessment in Learning 1',                                                               'units' => 3],
                    ['code' => 'ProfED9','name' => 'The Teacher & the Community, School Culture & Organizational Leadership with Focus on Philippine TVET System','units'=>3],
                    ['code' => 'ICT6',   'name' => 'Video Presentation',                                                                      'units' => 3],
                    ['code' => 'ICT7',   'name' => 'Print Production',                                                                        'units' => 3],
                    ['code' => 'ICT8',   'name' => 'Web Creation',                                                                            'units' => 3],
                    ['code' => 'HE10',   'name' => 'Entrepreneurship',                                                                         'units' => 3],
                    ['code' => 'ICT9',   'name' => 'Call Center Basic',                                                                        'units' => 3],
                ],
                '4th Year' => [
                    ['code' => 'FS1',    'name' => 'Field Study 1',                                                                            'units' => 3],
                    ['code' => 'FS2',    'name' => 'Field Study 2',                                                                            'units' => 3],
                    ['code' => 'RS2',    'name' => 'Undergraduate Thesis/Research Paper',                                                      'units' => 3],
                ],
            ],
            'BTLED-HE' => [
                '1st Year' => [
                    ['code'=>'GE1','name'=>'Purposive Communication','units'=>3],
                    ['code'=>'GE2','name'=>'Reading In Philippine History','units'=>3],
                    ['code'=>'GE3','name'=>'Mathematics in the Modern World','units'=>3],
                    ['code'=>'GE4','name'=>'Art Appreciation','units'=>3],
                    ['code'=>'GE5','name'=>'Understanding the Self','units'=>3],
                    ['code'=>'GE6','name'=>'Gender and Society','units'=>3],
                    ['code'=>'GE7','name'=>'Philippine Popular Culture','units'=>3],
                    ['code'=>'IA1','name'=>'Introduction to Industrial Arts Part 1','units'=>3],
                    ['code'=>'PE1','name'=>'PATHFIT 1','units'=>2],
                    ['code'=>'NSTP1','name'=>'Civic Welfare Training Service 1','units'=>3],
                ],
                '2nd Year' => [
                    ['code'=>'ProfED1','name'=>'Technology for Teaching & Learning 1','units'=>3],
                    ['code'=>'ProfED2','name'=>'Foundation of Special & Inclusive Education','units'=>3],
                    ['code'=>'ProfED3','name'=>'Facilitating Learner-Centered Teaching: The Learner-Centered Approaches with Emphasis on Trainers Methodology 1','units'=>3],
                    ['code'=>'ProfED4','name'=>'The Child & Adolescent Learner & Learning Principles','units'=>3],
                    ['code'=>'HE3','name'=>'Consumer Education','units'=>3],
                    ['code'=>'HE4','name'=>'Household Management','units'=>3],
                    ['code'=>'AF1','name'=>'Agri-Fishery Part 1','units'=>3],
                    ['code'=>'ICT1','name'=>'Introduction to ICT Specializations 1','units'=>3],
                    ['code'=>'PE3','name'=>'PATHFIT 3','units'=>2],
                ],
                '3rd Year' => [
                    ['code'=>'ProfED8','name'=>'Assessment in Learning 1','units'=>3],
                    ['code'=>'ProfED9','name'=>'The Teacher & the Community, School Culture & Organizational Leadership with Focus on Philippine TVET System','units'=>3],
                    ['code'=>'HE7','name'=>'Principles of Food Preparation','units'=>3],
                    ['code'=>'HE8','name'=>'Clothing Selection Purchase & Care','units'=>3],
                    ['code'=>'HE9','name'=>'Arts in Daily Living','units'=>3],
                    ['code'=>'HE10','name'=>'Entrepreneurship','units'=>3],
                    ['code'=>'HE11','name'=>'Food & Nutrition','units'=>3],
                ],
                '4th Year' => [
                    ['code'=>'FS1','name'=>'Field Study 1','units'=>3],
                    ['code'=>'FS2','name'=>'Field Study 2','units'=>3],
                    ['code'=>'RS2','name'=>'Undergraduate Thesis/Research Paper','units'=>3],
                ],
            ],
            'BTLED-IA' => [
                '1st Year' => [
                    ['code'=>'GE1','name'=>'Purposive Communication','units'=>3],
                    ['code'=>'GE2','name'=>'Reading In Philippine History','units'=>3],
                    ['code'=>'GE3','name'=>'Mathematics in the Modern World','units'=>3],
                    ['code'=>'GE4','name'=>'Art Appreciation','units'=>3],
                    ['code'=>'GE5','name'=>'Understanding the Self','units'=>3],
                    ['code'=>'GE6','name'=>'Gender and Society','units'=>3],
                    ['code'=>'GE7','name'=>'Philippine Popular Culture','units'=>3],
                    ['code'=>'IA1','name'=>'Introduction to Industrial Arts Part 1','units'=>3],
                    ['code'=>'PE1','name'=>'PATHFIT 1','units'=>2],
                    ['code'=>'NSTP1','name'=>'Civic Welfare Training Service 1','units'=>3],
                ],
                '2nd Year' => [
                    ['code'=>'ProfED1','name'=>'Technology for Teaching & Learning 1','units'=>3],
                    ['code'=>'ProfED2','name'=>'Foundation of Special & Inclusive Education','units'=>3],
                    ['code'=>'ProfED3','name'=>'Facilitating Learner-Centered Teaching: The Learner-Centered Approaches with Emphasis on Trainers Methodology 1','units'=>3],
                    ['code'=>'ProfED4','name'=>'The Child & Adolescent Learner & Learning Principles','units'=>3],
                    ['code'=>'IA3','name'=>'Fundamentals of Automotive Technology','units'=>3],
                    ['code'=>'IA4','name'=>'Applied Automotive Technology','units'=>3],
                    ['code'=>'AF1','name'=>'Agri-Fishery Part 1','units'=>3],
                    ['code'=>'ICT1','name'=>'Introduction to ICT Specializations 1','units'=>3],
                    ['code'=>'PE3','name'=>'PATHFIT 3','units'=>2],
                ],
                '3rd Year' => [
                    ['code'=>'ProfED8','name'=>'Assessment in Learning 1','units'=>3],
                    ['code'=>'ProfED9','name'=>'The Teacher & the Community, School Culture & Organizational Leadership with Focus on Philippine TVET System','units'=>3],
                    ['code'=>'IA6','name'=>'Civil Technology','units'=>3],
                    ['code'=>'IA7','name'=>'Fundamentals of Electronic Technology','units'=>3],
                    ['code'=>'IA8','name'=>'Fundamentals of Electrical Technology','units'=>3],
                    ['code'=>'HE10','name'=>'Entrepreneurship','units'=>3],
                    ['code'=>'IA9','name'=>'Metal Works','units'=>3],
                ],
                '4th Year' => [
                    ['code'=>'FS1','name'=>'Field Study 1','units'=>3],
                    ['code'=>'FS2','name'=>'Field Study 2','units'=>3],
                    ['code'=>'RS2','name'=>'Undergraduate Thesis/Research Paper','units'=>3],
                ],
            ],
            'BSED-Math' => [
                '1st Year' => [
                    ['code'=>'GE1','name'=>'Purposive Communication','units'=>3],
                    ['code'=>'GE2','name'=>'Reading In Philippine History','units'=>3],
                    ['code'=>'GE3','name'=>'Mathematics in the Modern World','units'=>3],
                    ['code'=>'GE4','name'=>'Art Appreciation','units'=>3],
                    ['code'=>'GE5','name'=>'Understanding the Self','units'=>3],
                    ['code'=>'GE6','name'=>'Gender and Society','units'=>3],
                    ['code'=>'GE7','name'=>'Philippine Popular Culture','units'=>3],
                    ['code'=>'MATH1','name'=>'History of Mathematics','units'=>3],
                    ['code'=>'PE1','name'=>'PATHFIT 1','units'=>2],
                    ['code'=>'NSTP1','name'=>'Civic Welfare Training Service 1','units'=>3],
                ],
                '2nd Year' => [
                    ['code'=>'ProfED1','name'=>'Technology for Teaching & Learning 1','units'=>3],
                    ['code'=>'ProfED2','name'=>'Foundation of Special & Inclusive Education','units'=>3],
                    ['code'=>'ProfED3','name'=>'Facilitating Learner-Centered Teaching: The Learner-Centered Approaches with Emphasis on Trainers Methodology 1','units'=>3],
                    ['code'=>'ProfED4','name'=>'The Child & Adolescent Learner & Learning Principles','units'=>3],
                    ['code'=>'MATH5','name'=>'Logic & Set Theory','units'=>3],
                    ['code'=>'MATH6','name'=>'Elementary Statistics & Probability','units'=>3],
                    ['code'=>'MATH7','name'=>'Calculus 1 w/Analytic Geometry','units'=>4],
                    ['code'=>'PE3','name'=>'PATHFIT 3','units'=>2],
                ],
                '3rd Year' => [
                    ['code'=>'ProfED8','name'=>'Assessment in Learning 1','units'=>3],
                    ['code'=>'ProfED9','name'=>'The Teacher & the Community, School Culture & Organizational Leadership with Focus on Philippine TVET System','units'=>3],
                    ['code'=>'MATH12','name'=>'Principles & Strategies In Teaching Mathematics','units'=>3],
                    ['code'=>'MATH13','name'=>'Calculus 3','units'=>3],
                    ['code'=>'MATH14','name'=>'Linear Algebra','units'=>3],
                    ['code'=>'MATH15','name'=>'Advanced Statistics','units'=>3],
                ],
                '4th Year' => [
                    ['code'=>'FS1','name'=>'Field Study 1','units'=>3],
                    ['code'=>'FS2','name'=>'Field Study 2','units'=>3],
                ],
            ],
            'BEED' => [
                '1st Year' => [
                    ['code'=>'GE1','name'=>'Purposive Communication','units'=>3],
                    ['code'=>'GE2','name'=>'Reading In Philippine History','units'=>3],
                    ['code'=>'GE3','name'=>'Mathematics in the Modern World','units'=>3],
                    ['code'=>'GE4','name'=>'Art Appreciation','units'=>3],
                    ['code'=>'GE5','name'=>'Understanding the Self','units'=>3],
                    ['code'=>'GE6','name'=>'Gender and Society','units'=>3],
                    ['code'=>'GE7','name'=>'Philippine Popular Culture','units'=>3],
                    ['code'=>'EDUC1','name'=>'Teaching Math in the Primary Grades','units'=>3],
                    ['code'=>'PE1','name'=>'PATHFIT 1','units'=>2],
                    ['code'=>'NSTP1','name'=>'Civic Welfare Training Service 1','units'=>3],
                ],
                '2nd Year' => [
                    ['code'=>'ProfED1','name'=>'Technology for Teaching & Learning 1','units'=>3],
                    ['code'=>'ProfED2','name'=>'Foundation of Special & Inclusive Education','units'=>3],
                    ['code'=>'ProfED3','name'=>'Facilitating Learner-Centered Teaching: The Learner-Centered Approaches with Emphasis on Trainers Methodology 1','units'=>3],
                    ['code'=>'ProfED4','name'=>'The Child & Adolescent Learner & Learning Principles','units'=>3],
                    ['code'=>'EDUC5','name'=>'Teaching Math in the Intermediate Grades','units'=>3],
                    ['code'=>'EDUC6','name'=>'Edukasyong Pantahanan at Pangkabuhayan','units'=>3],
                    ['code'=>'EDUC7','name'=>'Pagtuturo ng Filipino sa Elementary (II) Panitikan ng Pilipinas','units'=>3],
                    ['code'=>'PE3','name'=>'PATHFIT 3','units'=>2],
                ],
                '3rd Year' => [
                    ['code'=>'ProfED8','name'=>'Assessment in Learning 1','units'=>3],
                    ['code'=>'ProfED9','name'=>'The Teacher & the Community, School Culture & Organizational Leadership with Focus on Philippine TVET System','units'=>3],
                    ['code'=>'EDUC11','name'=>'Teaching English in the Elementary Grades Through Literature','units'=>3],
                    ['code'=>'EDUC12','name'=>'Teaching Science in Elementary Grades (Biology and Chemistry)','units'=>3],
                    ['code'=>'EDUC13','name'=>'Teaching PE and Health in the Elementary Grades','units'=>3],
                    ['code'=>'EDUC14','name'=>'Teaching Social Studies in the Elementary Grades (Culture & Geography)','units'=>3],
                ],
                '4th Year' => [
                    ['code'=>'FS1','name'=>'Field Study 1','units'=>3],
                    ['code'=>'FS2','name'=>'Field Study 2','units'=>3],
                ],
            ],
        ];

        foreach ($data as $courseName => $years) {
            $course = Course::firstOrCreate(['name' => $courseName]);

            foreach ($years as $yearName => $subjects) {
                $yearLevel = YearLevel::firstOrCreate(['year' => $yearName]);

                foreach ($subjects as $subjectData) {
                    $subject = Subject::firstOrCreate(
                        ['code' => $subjectData['code']],
                        ['name' => $subjectData['name'], 'units' => $subjectData['units']]
                    );

                    $courseSubject = CourseSubject::firstOrCreate(
                        [
                            'course_id'  => $course->id,
                            'subject_id' => $subject->id,
                            'year_id'    => $yearLevel->id,
                        ],
                        ['status' => 'active']
                    );

                    Log::info('CourseSubject Inserted:', [
                        'course'  => $courseName,
                        'year'    => $yearName,
                        'subject' => $subjectData['code'],
                        'status'  => $courseSubject->status,
                    ]);
                }
            }
        }
    }
}
