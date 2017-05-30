@extends('admin.layouts.master')

@section('page-header')
	<h4>Admin Dashboard</h4>
@endsection

@section('main')

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Admin Info</h1>
                <h1 class="page-subhead-line"> Admin ID:{{ Auth::guard('admin')->user()->id }} </h1>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    hello hello<br />
                </div>
            </div>
        </div>
    </div>
</div>

@endsection