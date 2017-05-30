<?php

namespace App\Http\Controllers\Admin;

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

        return view('admin.student.listAllStudents', compact('students'));
    
    }

    public function studentDetails($id)
    {
        $student = Student::find($id);
        $semester = Semester::all();
        $section = Section::all();
        //return "HEllo";
        return view('admin.student.showStudentDetails', compact('student', 'semester', 'section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addStudent()
    {
        $semesters = Semester::all();
        $sections = Section::all();

        return view('admin.student.addStudent', compact('semesters', 'sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveStudentDetails(Request $request)
    {
        $student = new Student;

        $student->name = $request->name;
        $student->email = $request->email;
        $student->gender = $request->gender;
        $student->password = $request->password;
        $student->phone = $request->phone;
        $student->parent_phone = $request->parent_phone;
        $student->DOB = $request->dob;
        $student->enrollment_number = $request->enrol_number;
        $student->roll_number = $request->roll_number;
        $student->semester = $request->semester;
        $student->section = $request->section;
        $student->batch = $request->batch;

        $student->save();

        return view('admin.student.studentDetailsStored');
    }

    public function uploadTimeTable()
    {
         
        if($request->hasFile('time_table'))
        {
            $timeTable = $request->file('time_table');
            $filename = time() . '.' . $timeTable->getClientOriginalExtension();
            Image::make($timeTable)->resize(300, 300)->save( public_path('/assets/img/' . $filename ) );

            $user-> = $filename;
            $user->save();
        }

         return view('student.profile',array('user' => Auth::user()));


    }
    }

    public function setTimeTable()
    {
        return view('admin.student.setTimeTable');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
