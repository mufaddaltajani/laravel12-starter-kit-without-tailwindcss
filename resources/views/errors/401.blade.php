@extends('errors::layout')

@section('title', __('Unauthorized'))

@section('message')
    <h1>401</h1>
    <p>Unauthorized</p>
    <a href="{{ url('/') }}" class="btn">
        Go Home
    </a>
@endsection
