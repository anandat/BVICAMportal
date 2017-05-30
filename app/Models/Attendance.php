<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendances';
    
    protected $fillable = ['student_id', 'subject_id', 'attendance_type_id', 'date_of_lecture', 'time_period_id'];

    public function studentID()
    {
        return $this->hasOne('App\Models\Student', 'id', 'student_id');
    }

    public function subjectID()
    {
        return $this->hasOne('App\Models\Subject', 'id', 'subject_id');
    }

    public function timePeriodID()
    {
        return $this->hasOne('App\Models\TimePeriod', 'id', 'time_period_id');
    }

     public function attendanceTypeID()
    {
        return $this->hasOne('App\Models\attendanceType', 'id', 'attendance_type_id');
    }
}
