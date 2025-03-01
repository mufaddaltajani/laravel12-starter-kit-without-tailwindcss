@extends('errors::layout')

@section('title', __('Page Expired'))

@section('message')
    <h1>419</h1>
    <p>Page Expired</p>
    <a href="{{ url('/') }}" class="btn">
        Go Home
    </a>
@endsection
