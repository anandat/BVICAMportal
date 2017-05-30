@extends('faculty.layouts.master')

@section('page-header')
	<h3>Faculty Portal</h3>
@endsection

@section('main')

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1>Select Class</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">

                    @include('faculty.includes.message-block')
                        <section class="row new-post">
                            <div class="col-md-6">
    
                                <form action="{{ route('faculty.attendance.viewList') }}" method="post">
                                    <div class="form-group"> 
                                    <tr>
                                        <td>Subject></td>
                                        <td><select name="subject_id">
                                            @foreach ($subjects as $subject)
                                                <option value="{{$subject->id}}">{{$subject->subject_name}}</option>
                                            @endforeach
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Section> </td>
                                        <td>
                                        <select name="section_id">
                                            @foreach ($sections as $section)
                                                <option value="{{$section->id}}">{{$section->section_name}}</option>
                                            @endforeach
                                        </select>
                                        </td>
                                    </tr>
                                    </div>
                        
                                    <button type="submit" class="btn btn-primary">View List</button>
                                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                                </form>
                            </div>
                        </section>
                                
                        <script>
                            var token = '{{ Session::token() }}';
        
                        </script>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection