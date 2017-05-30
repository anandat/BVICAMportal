<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Auth;
use App\Models\Post;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Auth\User;

class FacultyController extends Controller
{
    public function index()
    {
    	return view('faculty.index');
    }

    public function postCreatePost(Request $request)
    {
    	$this->validate($request, [
            'body' => 'required|max:1000'
        ]);
        $faculty_id= Auth::guard('faculty')->user()->id;
        $post = new Post();
        $post->body = $request['body'];
        $post->faculty_id = $faculty_id;
        $message = 'Post successfully created!';
        $post->save();
        return redirect()->route('faculty.index')->with(['message' => $message]);
    }

    public function getChangePassword()
    {
        return view('faculty.changePassword');
    }

    public function postChangePassword(Request $request)
    {
        $faculty_id = Auth::guard('faculty')->user()->id;
        $faculty = Faculty::find($faculty_id);
        $obj=$faculty->password;
                   
        $faculty->password=$request->new;
        $faculty->save();

        return view('faculty.index');
    }
}
