@extends('layout')

@section('content')
    <h1>projects<h1>
    <ul>
    @foreach ($projects as $project)
        <li>{{$project->title}}</li>
        <li>{{$project->description}}</li>
    @endforeach
    </ul>
@endsection
