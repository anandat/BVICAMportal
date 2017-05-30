@extends('faculty.layouts.master')

@section('page-header')
    <h3>Faculty Portal</h3>
@endsection

@section('main')

    <div class="container-fluid">
		  <div id="page-wrapper">
        <div id="page-inner">
		      
          {!! Form::open(['action' => 'Faculty\AttendanceController@showDefaulters', 'method' => 'POST']) !!}

        	   <?php $i=1; ?>
        	   
             <select class= "form-group" name="subject_id">
                  @foreach($subjects as $subject)
                    <option value={{$i}}>{{$subject->subject_name}}</option>
                  <?php $i++; ?>  
                  @endforeach
              </select>
              
              <?php $i=1; ?>
              
              <select class= "form-group" name="semester">
                  @foreach($semesters as $semester)
                    <option value={{$i}}>{{$semester->semester}}</option>
                  <?php $i++; ?>  
                  @endforeach
              </select>

              <?php $i=1; ?>
              
              <select class= "form-group" name="section_name">
                  @foreach($sections as $section)
                    <option value={{$i}}>{{$section->section_name}}</option>
                  <?php $i++; ?>  
                  @endforeach
              </select>

      			{!! Form::submit('View') !!}
      		
      		{!! Form::close() !!}
	</div>
  </div>
  </div>

@endsection