<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Input;
use App\Models\Student;
use App\Models\Semester;
use App\Models\Section;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $students = Student::all();

        return view('faculty.listAllStudents', compact('students'));
    
    }

    public function studentDetails($id)
    {
        $student = Student::find($id);
        $semester = Semester::all();
        $section = Section::all();
        
        return view('faculty.showStudentDetails', compact('student', 'semester', 'section'));
    }

}
