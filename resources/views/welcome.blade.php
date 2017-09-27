@extends('layout.master')

@section('title')
    Welcome
@endsection

@section('content')
    <h1>Welcome {{ $name }}</h1>
    <p>I'm {{ $age }} years old</p>

    <ul>
        <li><a href="{{ route('all-cars') }}">Cars</a></li>
        <li><a href="{{ route('about-us') }}">About us</a></li>
    </ul>
@endsection
