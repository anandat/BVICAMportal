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
                        <td>
                            <h3>Enroll No.</h3>
                        </td>
                        <td>
                            <h3>Name</h3>
                        </td>
                        <td>
                            <h3>Phone</h3>
                        </td>
                    </tr>
                </thead>

                <tbody>

                    @foreach($students as $student)

                    <tr>
                        <td>
                            <h6>{{$student->enrollment_number}}</h6>
                        </td>
                        <td>
                            <h5>{{$student->name}}</h5>
                        </td>
                        <td>
                            <h6>{{$student->phone}}</h6>                    
                        </td>
                        <td>
                            <a href="{{URL::route('faculty.showStudentDetails', $student->id)}}">View more details</a> 
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection