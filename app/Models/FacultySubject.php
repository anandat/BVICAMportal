<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacultySubject extends Model
{
    protected $table = 'Faculty_subjects';
	
	protected $fillable = ['faculty_id', 'Subject_id'];

	public function subjectID()
    {
    	return $this->hasOne('App\Models\Subject', 'id', 'subject_id');
    }

    public function  facultyID()
    {
    	return $this->hasOne('App\Models\Faculty', 'id', 'faculty_id');
    }
}
