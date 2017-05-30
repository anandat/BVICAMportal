@section('title', 'student Panel')
@extends('student.layouts.master')

@section('title', 'Student Panel')


@section('main')


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> Info</h1>
                <h1 class="page-subhead-line"> </h1>

            </div>
        </div> 
        <div class="row">
                
                <div class="col-md-4">
                <form action="{{ route('/faculty/postChangePassword') }}" method="post">
                       <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Old Password</label>
                    <input class="form-control" type="password" name="old" id="password" }}">
                        </div>
                
                
                       <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">New Password</label>
                    <input class="form-control" type="password" name="new" id="password" }}">
                        </div>
                 
                
                       <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Re-New Password</label>
                    <input class="form-control" type="password" name="re_new" id="password" }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Change Password</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                </div>
            </form>
                
            
        </div>
        
    </div>
</div>

@endsection


