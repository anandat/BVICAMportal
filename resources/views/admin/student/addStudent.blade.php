@extends('admin.layouts.master')

@section('page-header')
    <h3>Add Student</h3>
@endsection

@section('main')

    <div class="col-md-4 col-md-offset-4 text-center">

        {!! Form::open(array('action' => 'Admin\StudentController@saveStudentDetails', 'method' => 'post')) !!}

        	{{ csrf_field() }}

    			<div class="form-group">
            {!! Form::label('enrol_number', 'Enrollment Number') !!}
    				{!! Form::number('enrol_number', 'value', ['class' => 'form-control', 'placeholder' => 'Enrollment Number']) !!}
    			</div>

    			<div class="form-group">
            {!! Form::label('roll_number', 'Roll Number') !!}
    				{!! Form::number('roll_number', 'value', ['class' => 'form-control', 'placeholder' => 'Roll Number']) !!}
    			</div>			

        	<div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
          </div>

          <div class="form-group"">
            {!! Form::label('email', 'Email Address') !!}
            {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
			   </div>

			   <div class="form-group">
          	{!! Form::label('password', 'Password') !!}
          	{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
			   </div>

			   <div class="form-group">
            {!! Form::label('dob', 'Date of Birth') !!}
            {!! Form::date('dob', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Date of Birth']) !!}
			   </div>

			   <div class="form-group">
            {!! Form::label('gender', 'Gender: ') !!}
            Male{!! Form::radio('gender', 'Male', ['class' => 'form-control']) !!}
            Female{!! Form::radio('gender', 'Female', ['class' => 'form-control']) !!}
			   </div>

    			<div class="form-group">
                	{!! Form::label('phone', 'Phone Number ') !!}
                  	{!! Form::number('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}
    			</div>

          <div class="form-group">
            {!! Form::label('address', 'Address') !!}
            {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
          </div>

          <div class="form-group">
          	{!! Form::label('parent_phone', 'Parent Phone Number ') !!}
            {!! Form::number('parent_phone', null, ['class' => 'form-control', 'placeholder' => 'Parent Phone Number']) !!}
			   </div>

  			<div class="form-group">
  			 <?php $i=1; ?>
          Semester: <select class= "form-control" name="semester"> 
              @foreach($semesters as $semester)
                <option value={{$i}}>{{$semester->semester}}</option>
                <?php $i++; ?>
              @endforeach
          </select>
        </div>

        <div class="form-group">
  			   <?php $i=1; ?>
          Section: <select class= "form-control" name="section"> 
              @foreach($sections as $section)
                <option value={{$i}}>{{$section->section_name}}</option>
                <?php $i++; ?>
              @endforeach
          </select>
        </div>

        <div class="form-group">
          {!! Form::label('batch', 'Batch') !!}
          {!! Form::selectRange('batch', 2000, 2080, 2016, ['class' => 'form-control', 'placeholder' => 'Batch']) !!}
			   </div>

        <div class="form-group">
          <input type="submit" value="Add Student" class="btn btn-primary pull-left">
        </div>

        {!! Form::close() !!}

    </div>

@endsection