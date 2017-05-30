@extends('faculty.layouts.master')

@section('page-header')
    <h3>Faculty Portal</h3>
@endsection

@section('main')

    <div class="container-fluid">
		  <div id="page-wrapper">
        <div id="page-inner">
		      
          {!! Form::open(['action' => 'Admin\StudentController@uploadTimeTable', 'method' => 'POST']) !!}

        	   <?php $i=1; ?>
        	   
             <select class= "form-group" name="subject_id">
                  @foreach($semesters as $semester)
                    <option value={{$i}}>{{$semester->semester}}</option>
                  <?php $i++; ?>  
                  @endforeach
              </select>
              
              <select class= "form-group" name="section_name">
                  @foreach($sections as $section)
                    <option value={{$i}}>{{$section->section_name}}</option>
                  <?php $i++; ?>  
                  @endforeach
              </select>

              
              <img src="/assets/img" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <form enctype="multipart/form-data" action="/admin" method="POST">
                <label>Upload Time Table</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>

      			{!! Form::submit('Upload Time Table') !!}
      		
      		{!! Form::close() !!}
	</div>
  </div>
  </div>

@endsection