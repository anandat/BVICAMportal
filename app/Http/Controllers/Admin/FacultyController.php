<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Input;
use App\Models\Faculty;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $faculties = Faculty::all();

        return view('admin.faculty.listAllFaculties', compact('faculties'));
    
    }

    public function facultyDetails($id)
    {
        $faculty = Faculty::find($id);

        return view('admin.faculty.showFacultyDetails', compact('faculty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addFaculty()
    {
        return view('admin.Faculty.addFaculty');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveFacultyDetails(Request $request)
    {
        $faculty = new Faculty;

        $faculty->name = $request->name;
        $faculty->email = $request->email;
        $faculty->gender = $request->gender;
        $faculty->password = $request->password;
        $faculty->mobile = $request->mobile;
        $faculty->designation = $request->designation;
        $faculty->qualification = $request->qualification;
        $faculty->area_of_expertise = $request->area_of_expertise;
        $faculty->address = $request->address;
        $faculty->dob = $request->dob;

        $faculty->save();

        return view('admin.faculty.facultyDetailsStored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
