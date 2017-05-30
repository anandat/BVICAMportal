@extends('faculty.layouts.master')

@section('page-header')
	<h4>Faculty Dashboard</h4>
@endsection

@section('main')


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Post a Notice</h1>
                <h1 class="page-subhead-line">Faculty ID:{{ Auth::guard('faculty')->user()->id }}  </h1>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <br />
                    @include('faculty.includes.message-block')

                        <section class="row new-post">
                            <div class="col-md-6 col-md-offset-3">
                            
                                <form action="{{ route('faculty.post.create') }}" method="post"> 
                                    <div class="form-group">
                                        <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Notice"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create Notice</button>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                    
                                    
                                </form>
                            </div>
                        </section>

                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection