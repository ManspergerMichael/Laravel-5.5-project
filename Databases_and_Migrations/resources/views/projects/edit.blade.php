@extends('layout')
@section('title')
    Edit
@endsection

@section('content')
    <h1>Edit Project</h1>

    <form action="/projects/{{$project->id}}" method="POST">
        {{ method_field('PATCH') }}
        {{csrf_field()}}
        <div class="form-group">
            <label class="label" for="title">Title</label>
            <input type="text" class="form-control" name=title placeholder="Title" value="{{$project->title}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" name="description" placeholder="Discription">{{$project->description}}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Update Project</button>
        </div>


    </form>
    <form action="/projects/{{$project->id}}" method="POST">
        {{ method_field('DELETE')}}
        {{ csrf_field() }}
        <div class="form-group">
            <button class="btn btn-danger" type="submit">Delete Project</button>
        </div>
    </form>
@endsection
