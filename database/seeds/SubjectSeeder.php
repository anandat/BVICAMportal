<?php

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->delete();

        $data= [

        // Semester 1 subjects

            // Theory

        	['subject_id' => '1', 'subject_code' => 'MCA-101', 'subject_name' => 'Fundamentals of Information Technology', 'semester' => '1', 'subject_type_id' => '1'],
        	['subject_id' => '2', 'subject_code' => 'MCA-103', 'subject_name' => 'Programming in C', 'semester' => '1', 'subject_type_id' => '1'],
        	['subject_id' => '3', 'subject_code' => 'MCA-105', 'subject_name' => 'Discrete Mathematics', 'semester' => '1', 'subject_type_id' => '1'],
        	['subject_id' => '4', 'subject_code' => 'MCA-107', 'subject_name' => 'Computer Organization', 'semester' => '1', 'subject_type_id' => '1'],
        	['subject_id' => '5', 'subject_code' => 'MCA-109', 'subject_name' => 'Principles and Practices of Management', 'semester' => '1', 'subject_type_id' => '1'],

            // Practical

            ['subject_id' => '6', 'subject_code' => 'MCA-151', 'subject_name' => 'Fundamentals of IT Lab', 'semester' => '1', 'subject_type_id' => '4'],
            ['subject_id' => '7', 'subject_code' => 'MCA-153', 'subject_name' => 'Programming in C Lab', 'semester' => '1', 'subject_type_id' => '4'],
            ['subject_id' => '8', 'subject_code' => 'MCA-155', 'subject_name' => 'Computer Organization Lab', 'semester' => '1', 'subject_type_id' => '4'],

            // NUES

            ['subject_id' => '9', 'subject_code' => 'MCA-161', 'subject_name' => 'General Proficiency-I', 'semester' => '1', 'subject_type_id' => '5'],

        // Semester 2 subjects

            // Theory

            ['subject_id' => '044102', 'subject_code' => 'MCA-102', 'subject_name' => 'Data and File Structures', 'semester' => '2', 'subject_type_id' => '1'],
            ['subject_id' => '044104', 'subject_code' => 'MCA-104', 'subject_name' => 'Object-oriented Programming in C++', 'semester' => '2', 'subject_type_id' => '1'],
            ['subject_id' => '044106', 'subject_code' => 'MCA-106', 'subject_name' => 'Operating Systems', 'semester' => '2', 'subject_type_id' => '1'],
            ['subject_id' => '044108', 'subject_code' => 'MCA-108', 'subject_name' => 'Database Management Systems', 'semester' => '2', 'subject_type_id' => '1'],
            ['subject_id' => '044110', 'subject_code' => 'MCA-110', 'subject_name' => 'Software Engineering', 'semester' => '2', 'subject_type_id' => '1'],

            // Practical

            ['subject_id' => '044152', 'subject_code' => 'MCA-152', 'subject_name' => 'Data and File Structures Lab', 'semester' => '2', 'subject_type_id' => '4'],
            ['subject_id' => '044154', 'subject_code' => 'MCA-154', 'subject_name' => 'Object-oriented Programming in C++', 'semester' => '2', 'subject_type_id' => '4'],
            ['subject_id' => '044156', 'subject_code' => 'MCA-156', 'subject_name' => 'Database Management Systems Lab', 'semester' => '2', 'subject_type_id' => '4'],
            ['subject_id' => '044158', 'subject_code' => 'MCA-158', 'subject_name' => 'Software Engineering Lab', 'semester' => '2', 'subject_type_id' => '4'],

            // NUES

            ['subject_id' => '044162', 'subject_code' => 'MCA-162', 'subject_name' => 'General Proficiency-II', 'semester' => '2', 'subject_type_id' => '5'],

        // Semester 3 subjects
            ['subject_id' => '044201', 'subject_code' => 'MCA-201', 'subject_name' => 'Theory of Computation', 'semester' => '3', 'subject_type_id' => '1'],
            ['subject_id' => '044203', 'subject_code' => 'MCA-203', 'subject_name' => 'Computer Graphics', 'semester' => '3', 'subject_type_id' => '1'],
            ['subject_id' => '044205', 'subject_code' => 'MCA-205', 'subject_name' => 'Java Programming', 'semester' => '3', 'subject_type_id' => '1'],
            ['subject_id' => '044207', 'subject_code' => 'MCA-207', 'subject_name' => 'Data Communications and Networking', 'semester' => '3', 'subject_type_id' => '1'],
            ['subject_id' => '044209', 'subject_code' => 'MCA-209', 'subject_name' => 'C# Programming', 'semester' => '3', 'subject_type_id' => '1'],

            // Theory

            ['subject_id' => '044251', 'subject_code' => 'MCA-251', 'subject_name' => 'Computer Graphics Lab', 'semester' => '3', 'subject_type_id' => '4'],
            ['subject_id' => '044253', 'subject_code' => 'MCA-253', 'subject_name' => 'Java Pragramming Lab', 'semester' => '3', 'subject_type_id' => '4'],
            ['subject_id' => '044255', 'subject_code' => 'MCA-255', 'subject_name' => 'C# Programming Lab', 'semester' => '3', 'subject_type_id' => '4'],

            // NUES

            ['subject_id' => '044261', 'subject_code' => 'MCA-261', 'subject_name' => 'General Proficiency-III', 'semester' => '3', 'subject_type_id' => '5'],

        // Semester 4 subjects

            // Theory

            ['subject_id' => '044202', 'subject_code' => 'MCA-202', 'subject_name' => 'Design and Analysis of Algorithms', 'semester' => '4', 'subject_type_id' => '1'],
            ['subject_id' => '044204', 'subject_code' => 'MCA-204', 'subject_name' => 'Data Warehousing and Data Mining', 'semester' => '4', 'subject_type_id' => '1'],
            ['subject_id' => '044206', 'subject_code' => 'MCA-206', 'subject_name' => 'Advanced Computer Networks', 'semester' => '4', 'subject_type_id' => '1'],
            ['subject_id' => '044208', 'subject_code' => 'MCA-208', 'subject_name' => 'Object-oriented Analysis and Design', 'semester' => '4', 'subject_type_id' => '1'],
            ['subject_id' => '044210', 'subject_code' => 'MCA-210', 'subject_name' => 'Web Technologies', 'semester' => '4', 'subject_type_id' => '1'],

            // Practical

            ['subject_id' => '044252', 'subject_code' => 'MCA-252', 'subject_name' => 'Design and Analysis of Algorithms Lab', 'semester' => '4', 'subject_type_id' => '4'],
            ['subject_id' => '044254', 'subject_code' => 'MCA-254', 'subject_name' => 'Data Warehousing and Data Mining Lab', 'semester' => '4', 'subject_type_id' => '4'],
            ['subject_id' => '044256', 'subject_code' => 'MCA-256', 'subject_name' => 'Advanced Computer Networks Lab', 'semester' => '4', 'subject_type_id' => '4'],
            ['subject_id' => '044258', 'subject_code' => 'MCA-258', 'subject_name' => 'Object-oriented Analysis and Design Lab', 'semester' => '4', 'subject_type_id' => '4'],
            ['subject_id' => '044260', 'subject_code' => 'MCA-260', 'subject_name' => 'Web Technologies Lab', 'semester' => '4', 'subject_type_id' => '4'],

            // NUES

            ['subject_id' => '044262', 'subject_code' => 'MCA-262', 'subject_name' => 'General Proficiency-IV', 'semester' => '4', 'subject_type_id' => '5'],

        // Semester 5 subjects

            // Theory

            ['subject_id' => '044301', 'subject_code' => 'MCA-301', 'subject_name' => 'Linux Programming', 'semester' => '5', 'subject_type_id' => '1'],
            ['subject_id' => '044303', 'subject_code' => 'MCA-303', 'subject_name' => 'Software Testing', 'semester' => '5', 'subject_type_id' => '1'],
            ['subject_id' => '044305', 'subject_code' => 'MCA-305', 'subject_name' => 'Enterprise Computing with Java', 'semester' => '5', 'subject_type_id' => '1'],

            // Elective-I

            ['subject_id' => '044307', 'subject_code' => 'MCA-307', 'subject_name' => 'Advanced Database Management Systems', 'semester' => '5', 'subject_type_id' => '2'],
            ['subject_id' => '044309', 'subject_code' => 'MCA-309', 'subject_name' => 'Numerical and Scientific Computing', 'semester' => '5', 'subject_type_id' => '2'],
            ['subject_id' => '044311', 'subject_code' => 'MCA-311', 'subject_name' => 'Software Project Management', 'semester' => '5', 'subject_type_id' => '2'],
            ['subject_id' => '044313', 'subject_code' => 'MCA-313', 'subject_name' => 'Multimedia Technologies', 'semester' => '5', 'subject_type_id' => '2'],
            ['subject_id' => '044315', 'subject_code' => 'MCA-315', 'subject_name' => 'Mobile Computing', 'semester' => '5', 'subject_type_id' => '2'],
            ['subject_id' => '044317', 'subject_code' => 'MCA-317', 'subject_name' => 'Artificial Intelligence', 'semester' => '5', 'subject_type_id' => '2'],
            ['subject_id' => '044319', 'subject_code' => 'MCA-319', 'subject_name' => 'Microprocessors', 'semester' => '5', 'subject_type_id' => '2'],
            ['subject_id' => '044321', 'subject_code' => 'MCA-321', 'subject_name' => 'Compiler Design', 'semester' => '5', 'subject_type_id' => '2'],

            // Elective-II

            ['subject_id' => '044323', 'subject_code' => 'MCA-323', 'subject_name' => 'Operational Research', 'semester' => '5', 'subject_type_id' => '3'],
            ['subject_id' => '044325', 'subject_code' => 'MCA-325', 'subject_name' => 'Distributed DBMS and Objected-oriented Databases', 'semester' => '5', 'subject_type_id' => '3'],
            ['subject_id' => '044327', 'subject_code' => 'MCA-327', 'subject_name' => 'Financial Accounting', 'semester' => '5', 'subject_type_id' => '3'],
            ['subject_id' => '044329', 'subject_code' => 'MCA-329', 'subject_name' => 'Organizational Behaviour and Management Principles', 'semester' => '5', 'subject_type_id' => '3'],
            ['subject_id' => '044331', 'subject_code' => 'MCA-331', 'subject_name' => 'Advanced Computer Architecture', 'semester' => '5', 'subject_type_id' => '3'],
            ['subject_id' => '044333', 'subject_code' => 'MCA-333', 'subject_name' => 'Software Quality Management', 'semester' => '5', 'subject_type_id' => '3'],
            ['subject_id' => '044335', 'subject_code' => 'MCA-335', 'subject_name' => 'Digital Signal Processing', 'semester' => '5', 'subject_type_id' => '3'],
            ['subject_id' => '044337', 'subject_code' => 'MCA-337', 'subject_name' => 'Research Project', 'semester' => '5', 'subject_type_id' => '3'],

            // Practical

            ['subject_id' => '044351', 'subject_code' => 'MCA-351', 'subject_name' => 'Linux Programming Lab', 'semester' => '5', 'subject_type_id' => '4'],
            ['subject_id' => '044353', 'subject_code' => 'MCA-353', 'subject_name' => 'Software Testing Lab', 'semester' => '5', 'subject_type_id' => '4'],
            ['subject_id' => '044355', 'subject_code' => 'MCA-355', 'subject_name' => 'Enterprise Computing with Java Lab', 'semester' => '5', 'subject_type_id' => '4'],
            ['subject_id' => '044357', 'subject_code' => 'MCA-357', 'subject_name' => 'Lab Based on Elective-I', 'semester' => '5', 'subject_type_id' => '4'],

            // NUES

            ['subject_id' => '044361', 'subject_code' => 'MCA-361', 'subject_name' => 'General Proficiency-V', 'semester' => '5', 'subject_type_id' => '5'],

        // Semester 6 subjects

            // Theory

            ['subject_id' => '044302', 'subject_code' => 'MCA-302', 'subject_name' => 'Dissertation', 'semester' => '6', 'subject_type_id' => '1'],

            // NUES

            ['subject_id' => '044362', 'subject_code' => 'MCA-362', 'subject_name' => 'General Proficiency-VI', 'semester' => '6', 'subject_type_id' => '5']


        ];

        foreach ($data as $value) {
            Subject::create($value);
        }
    }
}
