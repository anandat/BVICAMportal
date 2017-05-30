@extends('faculty.layouts.master')

@section('page-header')
    <h3>Details</h3>
@endsection

@section('main')

	<div class="container-fluid">
		<div id="page-wrapper">
    		<div id="page-inner">

				<table class="table table-striped">
			   				
				  	<tr>
						<td>Enroll No.</td>
					 	<td>{{$student->enrollment_number}}</td>
					</tr>

					<tr>
						<td>Roll No.</td>
					 	<td>{{$student->roll_number}}</td>
					</tr>

					<tr>
						<td>Name</td>
					 	<td>{{$student->name}}</td>
					</tr>

					<tr>
						<td>Gender</td>
					 	<td>{{$student->gender}}</td>
					</tr>

					<tr>
						<td>DOB</td>
					 	<td>{{$student->DOB}}</td>
					</tr>

					<tr>
						<td>Email ID</td>
					 	<td>{{$student->email}}</td>
					</tr>

					<tr>
						<td>Phone</td>
					 	<td>{{$student->phone}}</td>
					</tr>			

					<tr>
						<td>Parent Phone</td>
					 	<td>{{$student->parent_phone}}</td>
					</tr>

					<tr>
						<td>Semester</td>
					 	<td>{{$student->semester}}</td>
					</tr>

					<tr>
						<td>Section</td>
					 	<td>{{$student->section}}</td>
					</tr>

					<tr>
						<td>Batch</td>
					 	<td>{{$student->batch}}</td>
					</tr>

				</table>
			</div>
		</div>
	</div>
@endsection