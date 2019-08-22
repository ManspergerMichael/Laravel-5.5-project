@extends('layout')

@section('title')Show @endsection

@section('content')
<div>
    <h1>{{$project->title}}</h1>
    <textarea>{{$project->description}}</textarea>
<div>

<div>
    <button class="btn"><a href="/projects/{{$project->id}}/edit">Edit Project</a></button>
</div>

@endsection
