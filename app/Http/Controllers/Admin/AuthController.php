<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    
    protected $guard = 'admin';
    protected $redirectTo = 'admin';

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }

    public function index()
    {
        return view('admin.auth.auth');
    }

    public function getRegister()
    {
        return view('admin.auth.register');
    }
}
