@extends('layout')
@section('title')
    Show
@endsection
@section('content')
<h1>{{$project->title}}</h1>

<textarea>{{$project->description}}</textarea>

@endsection
