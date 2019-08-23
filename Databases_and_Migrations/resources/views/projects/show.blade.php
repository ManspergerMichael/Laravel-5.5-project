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
                <li>
                <div>
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf

                        <div class="form-check">
                            <label class="form-check-label" for="completed">
                                <input type="checkbox" class="form-check-input" name="completed" onChange="this.form.submit()" id="" value="checkedValue" {{$task->completed ? 'checked' : 'unchecked'}}>
                                {{ $task->description }}
                            </label>
                        </div>
                    </form>
                </div>

                </li>
            @endforeach
        </ul>
    </div>
@endif
<form>
    <div class="form-group">
    <label for="description">New Task</label>
    <input type="text" class="form-control" name="description" id=""  placeholder="">

    </div>
</form>

<div>
    <button class="btn"><a href="/projects/{{$project->id}}/edit">Edit Project</a></button>
</div>

@endsection
