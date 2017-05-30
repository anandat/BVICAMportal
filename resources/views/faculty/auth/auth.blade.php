@extends('auth.index')

@section('title', 'Faculty Auth')

@section('form-action', route('faculty.auth.login'))

@section('password', route('faculty.password.reset'))
