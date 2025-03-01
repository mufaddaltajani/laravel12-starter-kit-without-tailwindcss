@extends('errors::layout')

@section('title', __('Forbidden'))

@section('message')
    <h1>403</h1>
    <p>{{ $exception->getMessage() ?: 'Forbidden' }}</p>
    <a href="{{ url('/') }}" class="btn">
        Go Home
    </a>
@endsection
