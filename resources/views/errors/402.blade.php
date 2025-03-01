@extends('errors::layout')

@section('title', __('Payment Required'))

@section('message')
    <h1>402</h1>
    <p>Payment Required</p>
    <a href="{{ url('/') }}" class="btn">
        Go Home
    </a>
@endsection
