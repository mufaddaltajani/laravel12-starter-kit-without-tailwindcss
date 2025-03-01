@extends('errors::layout')

@section('title', __('Service Unavailable'))

@section('message')
    <h1>503</h1>
    <p>Service Unavailable</p>
    <a href="{{ url('/') }}" class="btn">
        Go Home
    </a>
@endsection
