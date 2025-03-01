@extends('errors::layout')

@section('title', __('Too Many Requests'))

@section('message')
    <h1>429</h1>
    <p>Too Many Requests</p>
    <a href="{{ url('/') }}" class="btn">
        Go Home
    </a>
@endsection
