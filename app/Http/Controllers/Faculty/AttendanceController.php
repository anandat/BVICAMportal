<?php

namespace App\Http\Controllers\Faculty;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Input;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Attendance;
use App\Models\FacultySubject;
use App\Models\Section;
use App\Models\Semester;
use Auth;
use DB;


class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::where('section',1)->orderBy('roll_number', 'asc')->get();

        return view('faculty.update_attendance',compact('students'));
    }

    public function selectClass()
    {
        $subjects = Subject::all();
        $sections = Section::all();

        return view('faculty.attendance.selectClass', compact('subjects', 'sections'));
    }
    public function viewList(Request $request)
    {
        $subject_id = $request->subject_id;
        $section = $request->section_id;
        $students = Student::where('section',$section)
                        ->where('semester', 1)
                        ->orderBy('roll_number', 'asc')->get();

        return view('faculty.attendance.updateAttendance',compact('students'));
    }

    public function store(Request $request)
    {
        if(count($request->student))
        {
            $students = Student::whereIn('id',$request->student)->get();
        
            foreach($students as $student)
            {
              $attendance = new Attendance;
              $attendance->student_id= $student->id;
              $attendance->attendance_type_id = 1;
              $attendance->subject_id= 1;
              $attendance->date_of_lecture= '1994-11-12';
              $attendance->time_period_id= 1;
                  
              $attendance->save();
            }
        }
        return redirect('/faculty');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     if(count($request->student))
    //     {
    //         $students = Student::whereIn('id',$request->student)->get();
        
    //         foreach($students as $student)
    //         {
    //           $attendance = new Attendance;
    //           $attendance->student_id= $student->id;
    //           $attendance->attendance_regular = 1;
    //           $student->attendance_dl= 6;
    //           $attendance->subject_id= 1;
    //           $attendance->date_of_lecture= '12-11-1994';
    //           $attendance->time_period_id= 1;
                  
    //           $attendance->save();
    //         }
    //     }
    //     return "Hello";
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function selectSubject()
    {
       // $faculty = Auth::guard('faculty')->user();
       // $subjects = FacultySubject::where('faculty_id'  , $faculty->id)->get();
        $subjects = Subject::all();
        $sections = Section::all();
        $semesters = Semester::all();
       
       // $subjectName = Subject::all();
        return view('faculty.attendance.selectSubject', compact('subjects','sections','semesters'));
    }
    
    public function showDefaulters(Request $request)


    {

        $semester = $request->semester;
        $section = $request->section_name;       
        $subject_id = $request->subject_id;

        $total_lec = Attendance::where('subject_id', $subject_id)->groupBy('date_of_lecture','time_period_id')->get()->count();

        $student_ids = Student::select('id')->where('semester', $semester)->where('section', $section)->get();
       
        $student_attendances = Attendance::where('subject_id',$subject_id)->where('attendance_type_id','<>',2)->whereIn('student_id',$student_ids)->groupBy('student_id')->select('student_id',DB::raw('count(*) as total'))->get();

       $students = array();

       foreach($student_attendances as $student_attendance)
        {
            $percentage = (($student_attendance->total)/$total_lec)*100;
            if($percentage<75)
            {
                $students[] = ['student_id' => $student_attendance->student_id, 'percentage'=> $percentage];
            }
        }
       
        return view('faculty.attendance.showDefaulters', compact('students'));

    }

    public function attendanceList()
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
