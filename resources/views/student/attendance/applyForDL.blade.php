@extends('student.layouts.master')

@section('title', 'Student Panel')

@section('main')
    <div class="container-fluid">
        <div id="page-wrapper">
            <div id="page-inner">
                
                <div class="col-md-4 col-md-offset-4 text-center">

                    {!! Form::open(array('action' => 'Student\StudentController@processDLRequest', 'method' => 'post')) !!}

                        {{ csrf_field() }}

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
                        {!! Form::label('designation', 'Designation') !!}
                        {!! Form::textarea('designation', null, ['class' => 'form-control', 'placeholder' => 'Designation']) !!}
                      </div>

                      <div class="form-group">
                        {!! Form::label('qualification', 'Qualification') !!}
                        {!! Form::textarea('qualification', null, ['class' => 'form-control', 'placeholder' => 'Qualification']) !!}
                      </div>

                      <div class="form-group">
                        {!! Form::label('area_of_expertise', 'Area of Expertise') !!}
                        {!! Form::textarea('area_of_expertise', null, ['class' => 'form-control', 'placeholder' => 'Area of Expertise']) !!}
                      </div>

                      <div class="form-group">
                        {!! Form::label('address', 'Address') !!}
                        {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                      </div>

                            <div class="form-group">
                        {!! Form::label('mobile', 'Mobile') !!}
                        {!! Form::number('mobile', null, ['class' => 'form-control', 'placeholder' => 'Mobile']) !!}
                            </div>

                      <div class="form-group">
                          <input type="submit" value="Add Faculty" class="btn btn-primary pull-left">
                      </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>
@endsection