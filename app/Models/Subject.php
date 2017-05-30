<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['subject_id', 'subject_code', 'subject_name', 'semester', 'subject_type_id'];

    public function semester()
    {
    	return $this->hasOne('App\Smester', 'id', 'semester');
    }

    public function subjectTypeID()
    {
    	return $this->hasOne('App\SubjectType', 'id', 'subject_type_id');
    }
}
