@extends('layout')

@section('title')Show @endsection

@section('content')

<h1>{{$project->title}}</h1>
<div class="content">
    {{$project->description}}
</div>

@if ($project->tasks->count())
    <div>
        <ul>
            @foreach($project->tasks as $task)
                <li>{{ $task->description }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div>
    <button class="btn"><a href="/projects/{{$project->id}}/edit">Edit Project</a></button>
</div>

@endsection
