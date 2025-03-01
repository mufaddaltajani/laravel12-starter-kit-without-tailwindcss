@extends('errors::layout')

@section('title', __('Not Found'))

@section('message')
    <h1>404</h1>
    <p>Oops! The page you are looking for could not be found.</p>
    <a href="{{ url('/') }}" class="btn">
        Go Home
    </a>
@endsection
