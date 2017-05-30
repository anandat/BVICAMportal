<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as AuthUser;


class Student extends AuthUser
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['enrollment_number','password' ,'roll_number', 'name', 'gender', 'DOB', 'email', 'phone', 'parent_phone', 'section', 'semester', 'batch'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function section()
    {
        return $this->hasOne('App\Models\Section', 'id', 'section');
    }

    public function semester()
    {
        return $this->hasOne('App\Models\Semester', 'id', 'semester');
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
