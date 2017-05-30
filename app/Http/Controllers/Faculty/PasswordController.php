<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Auth\PasswordController as Controller;

class PasswordController extends Controller
{
    protected $broker = 'faculty';
    protected $redirectTo = 'faculty';
}
