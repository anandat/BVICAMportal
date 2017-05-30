@extends('admin.layouts.master')

@section('page-header')
    <h3>{{$student->name}}'s Details</h3>
@endsection

@section('main')

<div id="page-wrapper">
    <div id="page-inner">

		<table class="table table-striped">
	   				
		  	<tr>
				<td>Enroll No.</td>
			 	<td>{{$student->enrollment_number}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Roll No.</td>
			 	<td>{{$student->roll_number}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Name</td>
			 	<td>{{$student->name}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Gender</td>
			 	<td>{{$student->gender}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>DOB</td>
			 	<td>{{$student->DOB}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Email ID</td>
			 	<td>{{$student->email}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Phone</td>
			 	<td>{{$student->phone}}</td>
			 	<td></td>
			</tr>			

			<tr>
				<td>Parent Phone</td>
			 	<td>{{$student->parent_phone}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Semester</td>
			 	<td>{{$student->semester}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Section</td>
			 	<td>{{$student->section}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Batch</td>
			 	<td>{{$student->batch}}</td>
			 	<td></td>
			</tr>
		</table>
	</div>
</div>
@endsection