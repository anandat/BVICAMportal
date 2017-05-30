@extends('admin.layouts.master')

@section('page-header')
    <h3>Admin Portal</h3>
@endsection

@section('main')
<div class="container-fluid">

<div id="page-wrapper">
    <div id="page-inner">
        {{-- <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">List of Students</h1>
            </div>
        </div> --}}
        
        <div class="panel panel-default panel-list">

            <div class="panel-heading compact-pagination ">
                <div class="row">
                    <div class="col-md-2">
                        <h6>Enroll No.</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>Name</h6>
                    </div>
                    <div class="col-md-2">
                        <h6>Phone</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>View more details</h6>
                    </div>
                </div>
            </div>

            <br><br>
            @foreach($students as $student)
            <div class="panel-body">
            
                <div class="listing-items">

                    <div class="col-md-2">
                        <h6>{{$student->enrollment_number}}</h6>
                    </div>

                    <div class="col-md-3">
                        <h5>{{$student->name}}</h5>
                    </div> 
                
                    <div class="col-md-2">
                        <h6>{{$student->phone}}</h6>                    
                    </div>

                    <div class="col-md-4">
                        <a href="{{URL::route('admin.showStudentDetails', $student->id)}}">View more details</a> 
                    </div>
 
                </div>
            </div>
            </div>
            @endforeach
    </div>
</div>
</div>
@endsection