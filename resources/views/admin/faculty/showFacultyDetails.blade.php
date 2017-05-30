@extends('admin.layouts.master')

@section('page-header')
    <h3>{{$faculty->name}}'s Details</h3>
@endsection

@section('main')

<div id="page-wrapper">
    <div id="page-inner">

		<table class="table table-striped">
	   				
		  	<tr>
				<td>Name</td>
			 	<td>{{$faculty->name}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Gender</td>
			 	<td>{{$faculty->gender}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Designation</td>
			 	<td>{{$faculty->designation}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Qualification</td>
			 	<td>{{$faculty->qualification}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Area of Expertise</td>
			 	<td>{{$faculty->area_of_expertise}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Email ID</td>
			 	<td>{{$faculty->email}}</td>
			 	<td></td>
			</tr>

			<tr>
				<td>Address</td>
			 	<td>{{$faculty->address}}</td>
			 	<td></td>
			</tr>			

			<tr>
				<td>Mobile</td>
			 	<td>{{$faculty->mobile}}</td>
			 	<td></td>
			</tr>
		</table>
	</div>
</div>
@endsection