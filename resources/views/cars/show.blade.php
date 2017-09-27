@extends('layout.master')

@section('title')
    {{ $car->title }}
@endsection

@section('content')
    <h1>Car name: {{ $car->title }}</h1>

    <p>Car producer: {{ $car->producer }}</p>

    <p>Number of doors: {{ $car->number_of_doors }}</p>
@endsection
