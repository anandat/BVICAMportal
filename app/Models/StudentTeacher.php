<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentFaculty extends Model
{
    protected $table = 'student_faculties';
	
	protected $fillable = ['student_id', 'faculty_id'];

	public function studentID()
    {
    	return $this->hasOne('App\Models\Student', 'id', 'student_id');
    }

    public function facultyID()
    {
    	return $this->hasOne('App\Models\Faculty', 'id', 'faculty_id');
    }
}
