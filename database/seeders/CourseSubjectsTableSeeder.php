<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Subject;
use App\Models\YearLevel;
use App\Models\CourseSubject;
use App\Models\SubjectAlias;
use Illuminate\Support\Facades\Log;

class CourseSubjectsTableSeeder extends Seeder
{
    private function generateInternalCode($course, $yearLevel, $semester, $code)
    {
        $yearNum = substr($yearLevel, 0, 1); // Get first character of year level (e.g., '1' from '1st Year')
        $semNum = $semester === 'First' ? '1' : '2';
        return "{$course}_{$yearNum}{$semNum}_{$code}";
    }

    public function run(): void
    {
        $data = [
            'BTLED-ICT' => [
                '1st Year' => [
                    // First Semester
                    ['code' => 'GE1',    'name' => 'Purposive Communication',                                                                    'units' => 3,'semester'=>'First'],
                    ['code' => 'GE2',    'name' => 'Reading In Philippine History',                                                             'units' => 3,'semester'=>'First'],
                    ['code' => 'GE3',    'name' => 'Mathematics in the Modern World',                                                          'units' => 3,'semester'=>'First'],
                    ['code' => 'GE4',    'name' => 'Art Appreciation',                                                                         'units' => 3,'semester'=>'First'],
                    ['code' => 'GE5',    'name' => 'Understanding the Self',                                                                   'units' => 3,'semester'=>'First'],
                    ['code' => 'GE6',    'name' => 'Gender and Society',                                                                       'units' => 3,'semester'=>'First'],
                    ['code' => 'GE7',    'name' => 'Philippine Popular Culture',                                                               'units' => 3,'semester'=>'First'],
                    ['code' => 'IA1',    'name' => 'Introduction to Industrial Arts Part 1',                                                    'units' => 3,'semester'=>'First'],
                    ['code' => 'PE1',    'name' => 'PATHFIT 1',                                                                                'units' => 2,'semester'=>'First'],
                    ['code' => 'NSTP1',  'name' => 'Civic Welfare Training Service 1',                                                         'units' => 3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'GE8','name'=>'The Contemporary World','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE9','name'=>'Science, Technology & Society','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE10','name'=>'Ethics','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE11','name'=>'Living in the IT Era','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE12','name'=>'Life & Works of Rizal','units'=>3,'semester'=>'Second'],
                    ['code'=>'IA2','name'=>'Intoduction to Industrial Arts Part II','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE1','name'=>'Home Economics Literacy','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE2','name'=>'Family & Consumer Life Skills','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE2','name'=>'PATHFIT 2','units'=>2,'semester'=>'Second'],
                    ['code'=>'NSTP2','name'=>'Civic Welfare Training Service 2','units'=>3,'semester'=>'Second'],
                ],
                '2nd Year' => [
                    // First Semester
                    ['code' => 'ProfED1','name' => 'Technology for Teaching & Learning 1',                                                    'units' => 3,'semester'=>'First'],
                    ['code' => 'ProfED2','name' => 'Foundation of Special & Inclusive Education',                                         'units' => 3,'semester'=>'First'],
                    ['code' => 'ProfED3','name' => 'Facilitating Learner-Centered Teaching: The Learner-Centered Approaches with Emphasis on Trainers Methodology 1','units'=>3,'semester'=>'First'],
                    ['code' => 'ProfED4','name' => 'The Child & Adolescent Learner & Learning Principles',                               'units' => 3,'semester'=>'First'],
                    ['code' => 'ICT3',   'name' => 'Computer System Servicing',                                                            'units' => 3,'semester'=>'First'],
                    ['code' => 'ICT4',   'name' => 'Troubleshooting Technique',                                                            'units' => 3,'semester'=>'First'],
                    ['code' => 'AF1',    'name' => 'Agri-Fishery Part 1',                                                                  'units' => 3,'semester'=>'First'],
                    ['code' => 'ICT1',   'name' => 'Introduction to ICT Specializations 1',                                               'units' => 3,'semester'=>'First'],
                    ['code' => 'PE3',    'name' => 'PATHFIT 3',                                                                                'units' => 2,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'ProfED5','name'=>'The Teaching Profession','units'=>3,'semester'=>'Second'],
                    ['code'=>'ProfED6','name'=>'Building & Enhancing New Literacies Across the Curriculum with Emphasis on the 21st Century Skills*','units'=>3,'semester'=>'Second'],
                    ['code'=>'ProfED7','name'=>'The Teacher and the Curriculum','units'=>3,'semester'=>'Second'],
                    ['code'=>'ProfED11','name'=>'Curriculum Development and Evaluation with Emphasis on Trainers Methodology II*','units'=>3,'semester'=>'Second'],
                    ['code'=>'ICT2','name'=>'Introduction to ICT Specialiations 2','units'=>3,'semester'=>'Second'],
                    ['code'=>'AF2','name'=>'Agri-Fishery Part II','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE5','name'=>'Technology for Teaching & Learning 2**','units'=>3,'semester'=>'Second'],
                    ['code'=>'ICT5','name'=>'Drawing tools & Animation','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE4','name'=>'PATHFIT 4','units'=>2,'semester'=>'Second'],
                ],
                '3rd Year' => [
                    // First Semester
                    ['code' => 'ProfED8','name' => 'Assessment in Learning 1',                                                               'units' => 3,'semester'=>'First'],
                    ['code' => 'ProfED9','name' => 'The Teacher & the Community, School Culture & Organizational Leadership with Focus on Philippine TVET System','units'=>3,'semester'=>'First'],
                    ['code' => 'ICT6',   'name' => 'Video Presentation',                                                                      'units' => 3,'semester'=>'First'],
                    ['code' => 'ICT7',   'name' => 'Print Production',                                                                        'units' => 3,'semester'=>'First'],
                    ['code' => 'ICT8',   'name' => 'Web Creation',                                                                            'units' => 3,'semester'=>'First'],
                    ['code' => 'HE10',   'name' => 'Entrepreneurship',                                                                         'units' => 3,'semester'=>'First'],
                    ['code' => 'ICT9',   'name' => 'Call Center Basic',                                                                        'units' => 3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'ProfED10','name'=>'Assessment in Learning 2 with focus on Trainers Methodology I & II*','units'=>3,'semester'=>'Second'],
                    ['code'=>'ICT10','name'=>'Computer & Internet Manipulation','units'=>3,'semester'=>'Second'],
                    ['code'=>'ICT11','name'=>'Customer Relation / Support','units'=>3,'semester'=>'Second'],
                    ['code'=>'ICT12','name'=>'Sales Support','units'=>3,'semester'=>'Second'],
                    ['code'=>'ICT13','name'=>'Telecom OSP Intallation','units'=>3,'semester'=>'Second'],
                    ['code'=>'ICT14','name'=>'Broadband Installation','units'=>3,'semester'=>'Second'],
                    ['code'=>'RS1','name'=>'Methods of Research','units'=>3,'semester'=>'Second'],
                ],
                '4th Year' => [
                    // First Semester
                    ['code' => 'FS1',    'name' => 'Field Study 1',                                                                            'units' => 3,'semester'=>'First'],
                    ['code' => 'FS2',    'name' => 'Field Study 2',                                                                            'units' => 3,'semester'=>'First'],
                    ['code' => 'RS2',    'name' => 'Undergraduate Thesis/Research Paper',                                                      'units' => 3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'FS3','name'=>'Teaching Internship','units'=>6,'semester'=>'Second'],
                ],
            ],
            'BTLED-HE' => [
                '1st Year' => [
                    // First Semester
                    ['code'=>'GE1','name'=>'Purposive Communication','units'=>3,'semester'=>'First'],
                    ['code'=>'GE2','name'=>'Reading In Philippine History','units'=>3,'semester'=>'First'],
                    ['code'=>'GE3','name'=>'Mathematics in the Modern World','units'=>3,'semester'=>'First'],
                    ['code'=>'GE4','name'=>'Art Appreciation','units'=>3,'semester'=>'First'],
                    ['code'=>'GE5','name'=>'Understanding the Self','units'=>3,'semester'=>'First'],
                    ['code'=>'GE6','name'=>'Gender and Society','units'=>3,'semester'=>'First'],
                    ['code'=>'GE7','name'=>'Philippine Popular Culture','units'=>3,'semester'=>'First'],
                    ['code'=>'IA1','name'=>'Introduction to Industrial Arts Part 1','units'=>3,'semester'=>'First'],
                    ['code'=>'PE1','name'=>'PATHFIT 1','units'=>2,'semester'=>'First'],
                    ['code'=>'NSTP1','name'=>'Civic Welfare Training Service 1','units'=>3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'GE8','name'=>'The Contemporary World','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE9','name'=>'Science, Technology & Society','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE10','name'=>'Ethics','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE11','name'=>'Living in the IT Era','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE12','name'=>'Life & Works of Rizal','units'=>3,'semester'=>'Second'],
                    ['code'=>'IA2','name'=>'Intoduction to Industrial Arts Part II','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE1','name'=>'Home Economics Literacy','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE2','name'=>'Family & Consumer Life Skills','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE2','name'=>'PATHFIT 2','units'=>2,'semester'=>'Second'],
                    ['code'=>'NSTP2','name'=>'Civic Welfare Training Service 2','units'=>3,'semester'=>'Second'],
                ],
                '2nd Year' => [
                    // First Semester
                    ['code'=>'ProfED1','name'=>'Technology for Teaching & Learning 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED2','name'=>'Foundation of Special & Inclusive Education','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED3','name'=>'Facilitating Learner-Centered Teaching: The Learner-Centered Approaches with Emphasis on Trainers Methodology 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED4','name'=>'The Child & Adolescent Learner & Learning Principles','units'=>3,'semester'=>'First'],
                    ['code'=>'HE3','name'=>'Consumer Education','units'=>3,'semester'=>'First'],
                    ['code'=>'HE4','name'=>'Household Management','units'=>3,'semester'=>'First'],
                    ['code'=>'AF1','name'=>'Agri-Fishery Part 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ICT1','name'=>'Introduction to ICT Specializations 1','units'=>3,'semester'=>'First'],
                    ['code'=>'PE3','name'=>'PATHFIT 3','units'=>2,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'ProfED5','name'=>'The Teaching Profession','units'=>3,'semester'=>'Second'],
                    ['code'=>'ProfED6','name'=>'Building & Enhancing New Literacies Across the Curriculum with Emphasis on the 21st Century Skills*','units'=>3,'semester'=>'Second'],
                    ['code'=>'ProfED7','name'=>'The Teacher and the Curriculum','units'=>3,'semester'=>'Second'],
                    ['code'=>'ProfED11','name'=>'Curriculum Development and Evaluation with Emphasis on Trainers Methodology II*','units'=>3,'semester'=>'Second'],
                    ['code'=>'ICT2','name'=>'Introduction to ICT Specialiations 2','units'=>3,'semester'=>'Second'],
                    ['code'=>'AF2','name'=>'Agri-Fishery Part II','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE5','name'=>'Technology for Teaching & Learning 2**','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE6','name'=>'Fundamentals of Food Technology','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE4','name'=>'PATHFIT 4','units'=>2,'semester'=>'Second'],
                ],
                '3rd Year' => [
                    // First Semester
                    ['code'=>'ProfED8','name'=>'Assessment in Learning 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED9','name'=>'The Teacher & the Community, School Culture & Organizational Leadership with Focus on Philippine TVET System','units'=>3,'semester'=>'First'],
                    ['code'=>'HE7','name'=>'Principles of Food Preparation','units'=>3,'semester'=>'First'],
                    ['code'=>'HE8','name'=>'Clothing Selection Purchase & Care','units'=>3,'semester'=>'First'],
                    ['code'=>'HE9','name'=>'Arts in Daily Living','units'=>3,'semester'=>'First'],
                    ['code'=>'HE10','name'=>'Entrepreneurship','units'=>3,'semester'=>'First'],
                    ['code'=>'HE11','name'=>'Food & Nutrition','units'=>3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'ProfED10','name'=>'Assessment in Learning 2 with focus on Trainers Methodology I & II*','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE12','name'=>'Mariage & Family Relationships','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE13','name'=>'School Food Service Management','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE14','name'=>'Child & Adolescent Development','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE15','name'=>'Clothing Construction','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE16','name'=>'Crafts Design (Handicrafts)','units'=>3,'semester'=>'Second'],
                    ['code'=>'RS1','name'=>'Methods of Research','units'=>3,'semester'=>'Second'],
                ],
                '4th Year' => [
                    // First Semester
                    ['code'=>'FS1','name'=>'Field Study 1','units'=>3,'semester'=>'First'],
                    ['code'=>'FS2','name'=>'Field Study 2','units'=>3,'semester'=>'First'],
                    ['code'=>'RS2','name'=>'Undergraduate Thesis/Research Paper','units'=>3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'FS3','name'=>'Teaching Internship','units'=>6,'semester'=>'Second'],
                ],
            ],
            'BTLED-IA' => [
                '1st Year' => [
                    // First Semester
                    ['code'=>'GE1','name'=>'Purposive Communication','units'=>3,'semester'=>'First'],
                    ['code'=>'GE2','name'=>'Reading In Philippine History','units'=>3,'semester'=>'First'],
                    ['code'=>'GE3','name'=>'Mathematics in the Modern World','units'=>3,'semester'=>'First'],
                    ['code'=>'GE4','name'=>'Art Appreciation','units'=>3,'semester'=>'First'],
                    ['code'=>'GE5','name'=>'Understanding the Self','units'=>3,'semester'=>'First'],
                    ['code'=>'GE6','name'=>'Gender and Society','units'=>3,'semester'=>'First'],
                    ['code'=>'GE7','name'=>'Philippine Popular Culture','units'=>3,'semester'=>'First'],
                    ['code'=>'IA1','name'=>'Introduction to Industrial Arts Part 1','units'=>3,'semester'=>'First'],
                    ['code'=>'PE1','name'=>'PATHFIT 1','units'=>2,'semester'=>'First'],
                    ['code'=>'NSTP1','name'=>'Civic Welfare Training Service 1','units'=>3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'GE8','name'=>'The Contemporary World','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE9','name'=>'Science, Technology & Society','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE10','name'=>'Ethics','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE11','name'=>'Living in the IT Era','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE12','name'=>'Life & Works of Rizal','units'=>3,'semester'=>'Second'],
                    ['code'=>'IA2','name'=>'Intoduction to Industrial Arts Part II','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE1','name'=>'Home Economics Literacy','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE2','name'=>'Family & Consumer Life Skills','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE2','name'=>'PATHFIT 2','units'=>2,'semester'=>'Second'],
                    ['code'=>'NSTP2','name'=>'Civic Welfare Training Service 2','units'=>3,'semester'=>'Second'],
                ],
                '2nd Year' => [
                    // First Semester
                    ['code'=>'ProfED1','name'=>'Technology for Teaching & Learning 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED2','name'=>'Foundation of Special & Inclusive Education','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED3','name'=>'Facilitating Learner-Centered Teaching: The Learner-Centered Approaches with Emphasis on Trainers Methodology 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED4','name'=>'The Child & Adolescent Learner & Learning Principles','units'=>3,'semester'=>'First'],
                    ['code'=>'IA3','name'=>'Fundamentals of Automotive Technology','units'=>3,'semester'=>'First'],
                    ['code'=>'IA4','name'=>'Applied Automotive Technology','units'=>3,'semester'=>'First'],
                    ['code'=>'AF1','name'=>'Agri-Fishery Part 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ICT1','name'=>'Introduction to ICT Specializations 1','units'=>3,'semester'=>'First'],
                    ['code'=>'PE3','name'=>'PATHFIT 3','units'=>2,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'ProfED5','name'=>'The Teaching Profession','units'=>3,'semester'=>'Second'],
                    ['code'=>'ProfED6','name'=>'Building & Enhancing New Literacies Across the Curriculum with Emphasis on the 21st Century Skills*','units'=>3,'semester'=>'Second'],
                    ['code'=>'ProfED7','name'=>'The Teacher and the Curriculum','units'=>3,'semester'=>'Second'],
                    ['code'=>'ProfED11','name'=>'Curriculum Development and Evaluation with Emphasis on Trainers Methodology II*','units'=>3,'semester'=>'Second'],
                    ['code'=>'ICT2','name'=>'Introduction to ICT Specialiations 2','units'=>3,'semester'=>'Second'],
                    ['code'=>'AF2','name'=>'Agri-Fishery Part II','units'=>3,'semester'=>'Second'],
                    ['code'=>'HE5','name'=>'Technology for Teaching & Learning 2**','units'=>3,'semester'=>'Second'],
                    ['code'=>'IA5','name'=>'Civil Technology 1','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE4','name'=>'PATHFIT 4','units'=>2,'semester'=>'Second'],
                ],
                '3rd Year' => [
                    // First Semester
                    ['code'=>'ProfED8','name'=>'Assessment in Learning 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED9','name'=>'The Teacher & the Community, School Culture & Organizational Leadership with Focus on Philippine TVET System','units'=>3,'semester'=>'First'],
                    ['code'=>'IA6','name'=>'Civil Technology','units'=>3,'semester'=>'First'],
                    ['code'=>'IA7','name'=>'Fundamentals of Electronic Technology','units'=>3,'semester'=>'First'],
                    ['code'=>'IA8','name'=>'Fundamentals of Electrical Technology','units'=>3,'semester'=>'First'],
                    ['code'=>'HE10','name'=>'Entrepreneurship','units'=>3,'semester'=>'First'],
                    ['code'=>'IA9','name'=>'Metal Works','units'=>3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'ProfED10','name'=>'Assessment in Learning 2 with focus on Trainers Methodology I & II*','units'=>3,'semester'=>'Second'],
                    ['code'=>'IA10','name'=>'Digital Electronics Technology','units'=>3,'semester'=>'Second'],
                    ['code'=>'IA11','name'=>'Domestic Refrigeation and Air Conditioning','units'=>3,'semester'=>'Second'],
                    ['code'=>'IA12','name'=>'Commercial Refrigeration and Air Conditioning','units'=>3,'semester'=>'Second'],
                    ['code'=>'IA13','name'=>'Applied Electrical Technology','units'=>3,'semester'=>'Second'],
                    ['code'=>'IA14','name'=>'Graphic Arts','units'=>3,'semester'=>'Second'],
                    ['code'=>'RS1','name'=>'Methods of Research','units'=>3,'semester'=>'Second'],
                ],
                '4th Year' => [
                    // First Semester
                    ['code'=>'FS1','name'=>'Field Study 1','units'=>3,'semester'=>'First'],
                    ['code'=>'FS2','name'=>'Field Study 2','units'=>3,'semester'=>'First'],
                    ['code'=>'RS2','name'=>'Undergraduate Thesis/Research Paper','units'=>3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'FS3','name'=>'Teaching Internship','units'=>6,'semester'=>'Second'],
                ],
            ],
            'BSED-Math' => [
                '1st Year' => [
                    // First Semester
                    ['code'=>'GE1','name'=>'Purposive Communication','units'=>3,'semester'=>'First'],
                    ['code'=>'GE2','name'=>'Reading In Philippine History','units'=>3,'semester'=>'First'],
                    ['code'=>'GE3','name'=>'Mathematics in the Modern World','units'=>3,'semester'=>'First'],
                    ['code'=>'GE4','name'=>'Art Appreciation','units'=>3,'semester'=>'First'],
                    ['code'=>'GE5','name'=>'Understanding the Self','units'=>3,'semester'=>'First'],
                    ['code'=>'GE6','name'=>'Gender and Society','units'=>3,'semester'=>'First'],
                    ['code'=>'GE7','name'=>'Philippine Popular Culture','units'=>3,'semester'=>'First'],
                    ['code'=>'MATH1','name'=>'History of Mathematics','units'=>3,'semester'=>'First'],
                    ['code'=>'PE1','name'=>'PATHFIT 1','units'=>2,'semester'=>'First'],
                    ['code'=>'NSTP1','name'=>'Civic Welfare Training Service 1','units'=>3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'GE8','name'=>'The Contemporary World','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE9','name'=>'Science, Technology & Society','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE10','name'=>'Ethics','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE11','name'=>'Living in the IT Era','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE12','name'=>'Life & Works of Rizal','units'=>3,'semester'=>'Second'],
                    ['code'=>'MATH2','name'=>'College & Advanced Algebra','units'=>3,'semester'=>'Second'],
                    ['code'=>'MATH3','name'=>'Trigonometry','units'=>3,'semester'=>'Second'],
                    ['code'=>'MATH4','name'=>'Plane & Solid Geometry','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE2','name'=>'PATHFIT 2','units'=>2,'semester'=>'Second'],
                    ['code'=>'NSTP2','name'=>'Civic Welfare Training Service 2','units'=>3,'semester'=>'Second'],
                ],
                '2nd Year' => [
                    // First Semester
                    ['code'=>'ProfED1','name'=>'Technology for Teaching & Learning 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED2','name'=>'Foundation of Special & Inclusive Education','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED3','name'=>'Facilitating Learner-Centered Teaching: The Learner-Centered Approaches with Emphasis on Trainers Methodology 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED4','name'=>'The Child & Adolescent Learner & Learning Principles','units'=>3,'semester'=>'First'],
                    ['code'=>'MATH5','name'=>'Logic & Set Theory','units'=>3,'semester'=>'First'],
                    ['code'=>'MATH6','name'=>'Elementary Statistics & Probability','units'=>3,'semester'=>'First'],
                    ['code'=>'MATH7','name'=>'Calculus 1 w/Analytic Geometry','units'=>4,'semester'=>'First'],
                    ['code'=>'PE3','name'=>'PATHFIT 3','units'=>2,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'ProfED5','name'=>'The Teaching Profession','units'=>3,'semester'=>'Second'],
                    ['code'=>'ProfED6','name'=>'Building & Enhancing Literacies Across the Curriculum','units'=>3,'semester'=>'Second'],
                    ['code'=>'ProfED7','name'=>'The Teacher and the Curriculum','units'=>3,'semester'=>'Second'],
                    ['code'=>'MATH8','name'=>'Mathematics of Investment','units'=>3,'semester'=>'Second'],
                    ['code'=>'MATH9','name'=>'Modern Geometry','units'=>3,'semester'=>'Second'],
                    ['code'=>'MATH10','name'=>'Calculus 2','units'=>4,'semester'=>'Second'],
                    ['code'=>'MATH11','name'=>'Abstract Algebra','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE4','name'=>'PATHFIT 4','units'=>2,'semester'=>'Second'],
                ],
                '3rd Year' => [
                    // First Semester
                    ['code'=>'ProfED8','name'=>'Assessment in Learning 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED9','name'=>'The Teacher & the Community, School Culture & Organizational Leadership with Focus on Philippine TVET System','units'=>3,'semester'=>'First'],
                    ['code'=>'MATH12','name'=>'Principles & Strategies In Teaching Mathematics','units'=>3,'semester'=>'First'],
                    ['code'=>'MATH13','name'=>'Calculus 3','units'=>3,'semester'=>'First'],
                    ['code'=>'MATH14','name'=>'Linear Algebra','units'=>3,'semester'=>'First'],
                    ['code'=>'MATH15','name'=>'Advanced Statistics','units'=>3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'ProfED10','name'=>'Assessment in Learning 2','units'=>3,'semester'=>'Second'],
                    ['code'=>'MATH16','name'=>'Problem Solving, Mathematical Investigation & Modeling','units'=>3,'semester'=>'Second'],
                    ['code'=>'MATH17','name'=>'Technology for Teaching & Learning 2* (Instrumentation & Technology in Math)','units'=>3,'semester'=>'Second'],
                    ['code'=>'MATH18','name'=>'Number Theory','units'=>3,'semester'=>'Second'],
                    ['code'=>'MATH19','name'=>'Assessment & Evaluation in Mathematics','units'=>3,'semester'=>'Second'],
                    ['code'=>'MATH20','name'=>'Research in Mathematics','units'=>4,'semester'=>'Second'],
                ],
                '4th Year' => [
                    // First Semester
                    ['code'=>'FS1','name'=>'Field Study 1','units'=>3,'semester'=>'First'],
                    ['code'=>'FS2','name'=>'Field Study 2','units'=>3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'FS3','name'=>'Teaching Internship','units'=>6,'semester'=>'Second'],
                ],
            ],
            'BEED' => [
                '1st Year' => [
                    // First Semester
                    ['code'=>'GE1','name'=>'Purposive Communication','units'=>3,'semester'=>'First'],
                    ['code'=>'GE2','name'=>'Reading In Philippine History','units'=>3,'semester'=>'First'],
                    ['code'=>'GE3','name'=>'Mathematics in the Modern World','units'=>3,'semester'=>'First'],
                    ['code'=>'GE4','name'=>'Art Appreciation','units'=>3,'semester'=>'First'],
                    ['code'=>'GE5','name'=>'Understanding the Self','units'=>3,'semester'=>'First'],
                    ['code'=>'GE6','name'=>'Gender and Society','units'=>3,'semester'=>'First'],
                    ['code'=>'GE7','name'=>'Philippine Popular Culture','units'=>3,'semester'=>'First'],
                    ['code'=>'EDUC1','name'=>'Teaching Math in the Primary Grades','units'=>3,'semester'=>'First'],
                    ['code'=>'PE1','name'=>'PATHFIT 1','units'=>2,'semester'=>'First'],
                    ['code'=>'NSTP1','name'=>'Civic Welfare Training Service 1','units'=>3,'semester'=>'First'],
                    
                    // Second Semester
                    ['code'=>'GE8','name'=>'The Contemporary World','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE9','name'=>'Science, Technology & Society','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE10','name'=>'Ethics','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE11','name'=>'Living in the IT Era','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE12','name'=>'Life & Works of Rizal','units'=>3,'semester'=>'Second'],
                    ['code'=>'EDUC2','name'=>'Pagtuturo and Filipino sa Elementarya (I) - Estruktura at Gamit ng Wikang Filipino','units'=>3,'semester'=>'Second'],
                    ['code'=>'EDUC3','name'=>'Content & Pedagogy for the Mother Tongue','units'=>3,'semester'=>'Second'],
                    ['code'=>'EDUC4','name'=>'Good Manners & Right Conduct (Edukasyon sa Pagpapakatao)','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE2','name'=>'PATHFIT 2','units'=>2,'semester'=>'Second'],
                    ['code'=>'NSTP2','name'=>'Civic Welfare Training Service 2','units'=>3,'semester'=>'Second'],
                ],
                '2nd Year' => [
                    // ============== SECOND YEAR - FIRST SEMESTER ==============
                    ['code'=>'ProfED1','name'=>'Technology for Teaching & Learning 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED2','name'=>'Foundation of Special & Inclusive Education','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED3','name'=>'Facilitating Learner-Centered Teaching: The Learner-Centered Approaches with Emphasis on Trainers Methodology 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED4','name'=>'The Child & Adolescent Learner & Learning Principles','units'=>3,'semester'=>'First'],
                    ['code'=>'EDUC5','name'=>'Teaching Math in the Intermediate Grades','units'=>3,'semester'=>'First'],
                    ['code'=>'EDUC6','name'=>'Edukasyong Pantahanan at Pangkabuhayan','units'=>3,'semester'=>'First'],
                    ['code'=>'EDUC7','name'=>'Pagtuturo ng Filipino sa Elementary (II) Panitikan ng Pilipinas','units'=>3,'semester'=>'First'],
                    ['code'=>'PE3','name'=>'PATHFIT 3','units'=>2,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'ProfED5','name'=>'The Teaching Profession','units'=>3,'semester'=>'Second'],
                    ['code'=>'ProfED6','name'=>'Building & Enhancing Literacies Across the Curriculum','units'=>3,'semester'=>'Second'],
                    ['code'=>'ProfED7','name'=>'The Teacher and the Curriculum','units'=>3,'semester'=>'Second'],
                    ['code'=>'EDUC8','name'=>'Teaching English in the Elementary Grades (languages Arts)','units'=>3,'semester'=>'Second'],
                    ['code'=>'EDUC9','name'=>'Teaching Music in the Elementary Grades','units'=>3,'semester'=>'Second'],
                    ['code'=>'EDUC10','name'=>'Teaching Arts in the Elementary Grades','units'=>3,'semester'=>'Second'],
                    ['code'=>'EL1','name'=>'Teaching Multi-Grade Classes','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE4','name'=>'PATHFIT 4','units'=>2,'semester'=>'Second'],
                    
                ],
                '3rd Year' => [
                    // First Semester
                    ['code'=>'ProfED8','name'=>'Assessment in Learning 1','units'=>3,'semester'=>'First'],
                    ['code'=>'ProfED9','name'=>'The Teacher & the Community, School Culture & Organizational Leadership with Focus on Philippine TVET System','units'=>3,'semester'=>'First'],
                    ['code'=>'EDUC11','name'=>'Teaching English in the Elementary Grades Through Literature','units'=>3,'semester'=>'First'],
                    ['code'=>'EDUC12','name'=>'Teaching Science in Elementary Grades (Biology and Chemistry)','units'=>3,'semester'=>'First'],
                    ['code'=>'EDUC13','name'=>'Teaching PE and Health in the Elementary Grades','units'=>3,'semester'=>'First'],
                    ['code'=>'EDUC14','name'=>'Teaching Social Studies in the Elementary Grades (Culture & Geography)','units'=>3,'semester'=>'First'],
                    
                    // Second Semester
                    ['code'=>'ProfED10','name'=>'Assessment in Learning 2','units'=>3,'semester'=>'Second'],
                    ['code'=>'EDUC15','name'=>'Technology for Teaching and Elementary Grades','units'=>3,'semester'=>'Second'],
                    ['code'=>'EDUC16','name'=>'Teaching Science in Elementary Grades (Physics, Earth and Space Science)','units'=>3,'semester'=>'Second'],
                    ['code'=>'EDUC17','name'=>'Teaching Social Studies in the Elementary Grades (Phil. History & Government)','units'=>3,'semester'=>'Second'],
                    ['code'=>'EDUC18','name'=>'Edukasyong Pantahanan at Pangkabuhayan w/ Entrepreneurship','units'=>3,'semester'=>'Second'],
                    ['code'=>'EDUC19','name'=>'Research in Education','units'=>3,'semester'=>'Second'],
                ],
                '4th Year' => [
                    // First Semester
                    ['code'=>'FS1','name'=>'Field Study 1','units'=>3,'semester'=>'First'],
                    ['code'=>'FS2','name'=>'Field Study 2','units'=>3,'semester'=>'First'],
                    
                    // Second Semester
                    ['code'=>'FS3','name'=>'Teaching Internship','units'=>6,'semester'=>'Second'],
                ],
            ],
            'BALCS' => [
                '1st Year' => [
                    // First Semester
                    ['code'=>'GE1','name'=>'Purposive Communication','units'=>3,'semester'=>'First'],
                    ['code'=>'GE2','name'=>'Reading in Philippine History','units'=>3,'semester'=>'First'],
                    ['code'=>'GE3','name'=>'Mathematics in the Modern World','units'=>3,'semester'=>'First'],
                    ['code'=>'GE4','name'=>'Art Appreciation','units'=>3,'semester'=>'First'],
                    ['code'=>'GE5','name'=>'Understanding the Self/Philosophy of Human Person','units'=>3,'semester'=>'First'],
                    ['code'=>'GE6','name'=>'Ethics in Communication','units'=>3,'semester'=>'First'],
                    ['code'=>'Fil1','name'=>'Pagsulat sa Iba\'t-ibang Disiplina','units'=>3,'semester'=>'First'],
                    ['code'=>'FL1','name'=>'Foreign Language 1','units'=>3,'semester'=>'First'],
                    ['code'=>'PE1','name'=>'Physical Fitness & Self-Testing Activities','units'=>2,'semester'=>'First'],
                    ['code'=>'NSTP/CWTS','name'=>'Civic Welfare Training Service 1','units'=>3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'GE7','name'=>'History of Western Literature','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE8','name'=>'Earth Science','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE9','name'=>'Literature and Religion','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE10','name'=>'Figures of Speech and Language in Science & Technology','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE11','name'=>'The Contemporary World','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE12','name'=>'Science, Technology & Society','units'=>3,'semester'=>'Second'],
                    ['code'=>'Fil2','name'=>'Sining ng Pananaliksik','units'=>3,'semester'=>'Second'],
                    ['code'=>'FL2','name'=>'Foreign Language 2','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE2','name'=>'Rhythmic Activities','units'=>2,'semester'=>'Second'],
                    ['code'=>'NSTP/CWTS','name'=>'Civic Welfare Training Service 2','units'=>3,'semester'=>'Second'],
                ],
                '2nd Year' => [
                    // First Semester
                    ['code'=>'GE13','name'=>'Literature & the Environment','units'=>3,'semester'=>'First'],
                    ['code'=>'GE14','name'=>'Critical Writing','units'=>3,'semester'=>'First'],
                    ['code'=>'Core1','name'=>'Intro to Literature & Literary Studies','units'=>3,'semester'=>'First'],
                    ['code'=>'Core2','name'=>'Intro to Literary Theory','units'=>3,'semester'=>'First'],
                    ['code'=>'Core3','name'=>'Intro to Cultural Theory','units'=>3,'semester'=>'First'],
                    ['code'=>'Core4','name'=>'Intro to the Postcolonial Tradition','units'=>3,'semester'=>'First'],
                    ['code'=>'Core5','name'=>'Intro to Creative Writing','units'=>3,'semester'=>'First'],
                    ['code'=>'PE3','name'=>'Recreational Activities (Individual & Dual Sports)','units'=>2,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'GE15','name'=>'Filipino sa Tamang Gamit','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE16','name'=>'The Life & Works of Rizal','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE17','name'=>'Ethics','units'=>3,'semester'=>'Second'],
                    ['code'=>'Core6','name'=>'Intro to Literature & the Professions','units'=>3,'semester'=>'Second'],
                    ['code'=>'Core7','name'=>'Literary Research','units'=>3,'semester'=>'Second'],
                    ['code'=>'Core8','name'=>'Intro to Translation','units'=>3,'semester'=>'Second'],
                    ['code'=>'Area1','name'=>'Phil. Literature: The Region & the Nation','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE4','name'=>'Team Sports','units'=>2,'semester'=>'Second'],
                ],
                '3rd Year' => [
                    // First Semester
                    ['code'=>'EL1','name'=>'Creative Non-Fiction','units'=>3,'semester'=>'First'],
                    ['code'=>'EL2','name'=>'Literature & Economics','units'=>3,'semester'=>'First'],
                    ['code'=>'Area2','name'=>'Phil Literary Theory & Criticism','units'=>3,'semester'=>'First'],
                    ['code'=>'Area3','name'=>'Literature of Africa & Middle East','units'=>3,'semester'=>'First'],
                    ['code'=>'Area4','name'=>'Literary Translation','units'=>3,'semester'=>'First'],
                    ['code'=>'Area5','name'=>'Literature of Asia 1','units'=>3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'Area6','name'=>'Literature of Asia 2','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE18','name'=>'Literature of Europe','units'=>3,'semester'=>'Second'],
                    ['code'=>'EL3','name'=>'Literature and the Mind','units'=>3,'semester'=>'Second'],
                    ['code'=>'EL4','name'=>'Narrative Tools and Techniques in the Disciplines','units'=>3,'semester'=>'Second'],
                    ['code'=>'Research','name'=>'Methods of Research','units'=>3,'semester'=>'Second'],
                ],
                '4th Year' => [
                    // First Semester
                    ['code'=>'Area7','name'=>'Literature of the Americas','units'=>3,'semester'=>'First'],
                    ['code'=>'Thesis1','name'=>'Thesis 1','units'=>3,'semester'=>'First'],
                    ['code'=>'PR1','name'=>'Practicum','units'=>6,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'Thesis2','name'=>'Thesis 2','units'=>6,'semester'=>'Second'],
                    ['code'=>'Area8','name'=>'Literature and Cultural Studies','units'=>3,'semester'=>'Second'],
                ],
            ],
            'ACT' => [
                '1st Year' => [
                    // First Semester
                    ['code'=>'GE1','name'=>'Purposive Communication','units'=>3,'semester'=>'First'],
                    ['code'=>'GE3','name'=>'Mathematics in the Modern World','units'=>3,'semester'=>'First'],
                    ['code'=>'GE5','name'=>'Understanding the Self','units'=>3,'semester'=>'First'],
                    ['code'=>'CC101','name'=>'Introduction to Computing','units'=>3,'semester'=>'First'],
                    ['code'=>'CC102','name'=>'Fundamenals of Programming','units'=>3,'semester'=>'First'],
                    ['code'=>'CC103','name'=>'Platform Technologies','units'=>3,'semester'=>'First'],
                    ['code'=>'PE1','name'=>'Physical Fitness & Self-Testing Activities','units'=>2,'semester'=>'First'],
                    ['code'=>'NSTP1','name'=>'Literacy Training Service','units'=>3,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'GE9','name'=>'Science, Technology & Society','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE10','name'=>'Ethics','units'=>3,'semester'=>'Second'],
                    ['code'=>'GE12','name'=>'Life & Works of Rizal','units'=>3,'semester'=>'Second'],
                    ['code'=>'CC104','name'=>'Intermediate Programming','units'=>3,'semester'=>'Second'],
                    ['code'=>'CC105','name'=>'Data Communications & Networking 1','units'=>3,'semester'=>'Second'],
                    ['code'=>'CC106','name'=>'System Administration','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE2','name'=>'Rhythmic Activities','units'=>2,'semester'=>'Second'],
                    ['code'=>'NSTP2','name'=>'Literacy Training Service','units'=>3,'semester'=>'Second'],
                ],
                '2nd Year' => [
                    // First Semester
                    ['code'=>'CC107','name'=>'Data Structures & Algorithms','units'=>3,'semester'=>'First'],
                    ['code'=>'CC108','name'=>'Information Management 1','units'=>3,'semester'=>'First'],
                    ['code'=>'CC109','name'=>'Professional Issues in Computing','units'=>3,'semester'=>'First'],
                    ['code'=>'CC110','name'=>'Data Communication and Networking 2','units'=>3,'semester'=>'First'],
                    ['code'=>'CC111','name'=>'Network Administration','units'=>3,'semester'=>'First'],
                    ['code'=>'PE3','name'=>'Fundamentals of Games & Sports','units'=>2,'semester'=>'First'],

                    // Second Semester
                    ['code'=>'OJT','name'=>'Internship','units'=>6,'semester'=>'Second'],
                    ['code'=>'CC112','name'=>'Network Security','units'=>3,'semester'=>'Second'],
                    ['code'=>'PE4','name'=>'Recreational Acivities','units'=>2,'semester'=>'Second'],
                ],
            ],
        ];

        foreach ($data as $courseName => $years) {
            $course = Course::firstOrCreate(['name' => $courseName]);

            foreach ($years as $yearName => $subjects) {
                $yearLevel = YearLevel::firstOrCreate(['year' => $yearName]);

                foreach ($subjects as $subjectData) {
                    // Generate internal code
                    $yearNum = substr($yearName, 0, 1); // Get first character of year level
                    $semNum = $subjectData['semester'] === 'First' ? '1' : '2';
                    $internalCode = "{$courseName}_{$yearNum}{$semNum}_{$subjectData['code']}";
                    
                    $subject = Subject::firstOrCreate(
                        ['internal_code' => $internalCode],
                        [
                            'code' => $subjectData['code'],
                            'name' => $subjectData['name'], 
                            'units' => $subjectData['units'],
                            'semester' => $subjectData['semester'] ?? 'First'  
                        ]
                    );

                    // Create an alias if the subject name is different from the default
                    if ($subject->name !== $subjectData['name']) {
                        SubjectAlias::firstOrCreate(
                            [
                                'subject_id' => $subject->id,
                                'course_id' => $course->id
                            ],
                            ['display_name' => $subjectData['name']]
                        );
                    }

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
