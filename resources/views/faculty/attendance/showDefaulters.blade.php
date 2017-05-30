@extends('faculty.layouts.master')

@section('page-header')
    <h3>Faculty Portal</h3>
@endsection

@section('main')
	<div class="container-fluid">
		<div id="page-wrapper">
        	<div id="page-inner">
				<div class="table-responsive">
        			<table class="table table-striped">
		                <thead>
		                	<tr>
		                    <th>
		                        <h4>Student ID</h4>
		                    </th>
		                    <th>
		                        <h4>Percentage</h4>
		                    </th>
		                    </tr>
		                </thead>
		         
		        		<tbody>
				
				   			@foreach($students as $student)
							  	<tr>
									<td><a href="{{URL::route('faculty.showStudentDetails', $student['student_id'])}}">{{$student['student_id']}}</a></td>
								 	<td>{{$student['percentage']}}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection