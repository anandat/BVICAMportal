@extends('student.layouts.master')

@section('page-header')
	<h4>Student Dashboard</h4>
@endsection

@section('main')


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Notice Board</h1>
                <h1 class="page-subhead-line"></h1>
                <section class="row posts">
                    <div class="col-md-6 col-md-offset-3">
                        @foreach($posts as $post)
                            <article class="post" data-postid="{{ $post->id }}"> 
                                <p>{{ $post->body }}</p>
                                <div class="info">
                                    Posted by {{ $post->facultyID->name }} on {{ $post->created_at }}
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection
