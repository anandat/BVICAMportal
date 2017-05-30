<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Auth\PasswordController as Controller;

class PasswordController extends Controller
{
    protected $broker = 'student';
    protected $redirectTo = 'student';
}
