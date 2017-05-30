<?php

namespace App\Http\Controllers\Student;

use Auth;
use App\Models\StudentSubject;
use App\Models\Attendance;
use App\Models\Subject;
use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Post;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $faculties=Faculty::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('student.index', ['posts' => $posts]);
    }

    public function getChangePassword()
    {
        return view('student.changePassword');
    }

    public function postChangePassword(Request $request)
    {
        $student_id = Auth::guard('student')->user()->id;
        $student = Student::find($student_id);
        $obj=$student->password;
                   
        $student->password=$request->new;
        $student->save();

        $faculties=Faculty::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('student.index', ['posts' => $posts]);
    }

    public function viewAttendance()
    {
        $stdnt_id = Auth::guard('student')->user()->id;
        $subjects = StudentSubject::where('student_id',$stdnt_id)->get();

        $total_subjects = StudentSubject::where('student_id',$stdnt_id)->count();
       	
       	$sum_total_lectures = 0;
        $sum_attendance = 0;
        $sum_percentage = 0;
        
        $attendances = array();
        foreach($subjects as $subject)
        {
            $total_lec = Attendance::where('subject_id', $subject->subject_id)->groupBy('date_of_lecture','time_period_id')->get()->count();

            $student_attendance = Attendance::where('subject_id',$subject->subject_id)->where('attendance_type_id','<>',2)->where('student_id',$stdnt_id)->count();

            $subject_name = Subject::where('id',$subject->subject_id)->value('subject_name');
            
	        $percentage = (($student_attendance)/$total_lec)*100;
	        
	        $attendances[] = ['subject_name'=> $subject_name, 'percentage' => $percentage, 'total_lecture' => $total_lec, 'student_attendance' => $student_attendance];

	        $sum_total_lectures += $total_lec;
            $sum_attendance += $student_attendance;
            $sum_percentage += $percentage;
        }  

        $avg_percentage = $sum_percentage/$total_subjects;
         
        return view('student.attendance.viewAttendance',compact('attendances', 'sum_total_lectures', 'sum_attendance', 'avg_percentage'));   
    }
}
