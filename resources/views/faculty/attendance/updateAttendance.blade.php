@extends('faculty.layouts.master')

@section('page-header')
	<h3>Faculty Portal</h3>
@endsection

@section('main')
	<div class="container-fluid">
		<div id="page-wrapper">
        	<div id="page-inner">
        	<div class="row">
            <div class="col-md-12">
                <h1>Attendance List</h1>
            </div>
        </div>
				<div class="table-responsive">
        			<table class="table table-striped">
		                <thead>
		                	<tr>
		                    <th>
		                        <h4>Roll No</h4>
		                    </th>
		                    <th>
		                        <h4>Name</h4>
		                    </th>
		                    <th>
		                        <h4>Attendance</h4>
		                    </th>
		                    </tr>
		                </thead>
		         
		        		<tbody>

				    

							{!! Form::open(array('route' => 'faculty.attendance.store', 'method' => 'POST')) !!}  
							  
							  @foreach($students as $student)
							    <tr>
							    <td>{{ $student->roll_number }}</td>
							    <td>{{ $student->name }}</td>
							    <td>{!!Form::checkbox('student[]', $student->id) !!}</td>
								</tr>
							  @endforeach
							<br><br>
							{!!Form::hidden('subject_id')!!}
							{!! Form::submit('Submit') !!}
							{!! Form::close() !!}

						</tbody>
					</table>
                   
					<script>var token = '{{ Session::token() }}';</script>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection