@extends('errors::layout')

@section('title', __('Server Error'))

@section('message')
    <h1>500</h1>
    <p>Server Error</p>
    <a href="{{ url('/') }}" class="btn">
        Go Home
    </a>
@endsection
