@extends('auth.index')

@section('title', 'Admin Auth')

@section('form-action', route('admin.auth.login'))

@section('password', route('admin.password.reset'))
