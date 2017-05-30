<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DlNotification extends Model
{
    protected $table = 'dl_notifications';
    
    protected $fillable = ['student_id', 'subject_id', 'faculty_id', 'from_date', 'to_date', 'student_message', 'faculty_message', 'dl_status'];

    public function facultyID()
    {
        return $this->hasOne('App\Models\Student', 'id', 'student_id');
    }

    public function subjectID()
    {
        return $this->hasOne('App\Models\Subject', 'id', 'subject_id');
    }

    public function facultyID()
    {
    	return $this->hasOne('App\Models\Faculty', 'id', 'faculty_id');
    }
}
