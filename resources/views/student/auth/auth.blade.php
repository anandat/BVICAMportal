@extends('auth.index')

@section('title', 'Student Auth')

@section('form-action', route('student.auth.login'))

@section('password', route('student.password.reset'))
