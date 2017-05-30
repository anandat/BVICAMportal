<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    protected $table = 'student_subjects';
	
	protected $fillable = ['student_id', 'subject_id'];

	public function studentID()
    {
    	return $this->hasOne('App\Models\Student', 'id', 'student_id');
    }

    public function subjectID()
    {
    	return $this->hasOne('App\Models\Subject', 'id', 'subject_id');
    }
}
