@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>{{$title}}</h1>

{{-- Without Blade Template --}}
<?php foreach ($tasks as $task) : ?>
        <!--<li><?= $task; ?></li>-->
<?php endforeach; ?>

{{-- With Blade --}}
@foreach ($tasks as $task)
    <li>{{$task}}</li>
@endforeach

@endsection
