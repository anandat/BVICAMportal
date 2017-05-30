@extends('student.layouts.master')

@section('title', 'Student Panel')

@section('main')
    <div class="container-fluid">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>
                                <h4>Subject Name</h4>
                            </th>
                            <th>
                                <h4>Total lectures</h4>
                            </th>
                            <th>
                                <h4>Attendance</h4>
                            </th>
                            <th>
                                <h4>Percentage</h4>
                            </th>
                            </tr>
                        </thead>
                 
                        <tbody>
                        
                            @foreach($attendances as $attendance)
                                <tr>
                                    <td>{{$attendance['subject_name']}}</td>
                                    <td>{{$attendance['total_lecture']}}</td>
                                    <td>{{$attendance['student_attendance']}}</td>
                                    <td>{{$attendance['percentage']}}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>Total</td>
                                <td>{{ $sum_total_lectures }}</td>
                                <td>{{ $sum_attendance }}</td>
                                <td><b>{{ $avg_percentage }}</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection