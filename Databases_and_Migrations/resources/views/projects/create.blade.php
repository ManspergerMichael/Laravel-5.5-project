@extends('layout')
@section('title')
    Create
@endsection
@section('content')
<h1>Create A new Project</h1>

    <form method="POST" action="/projects">

        @csrf

        <div class="form-group">
            <label class="label" for="title">Title</label>
            <input class="form-control" type="text" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group" >
            <label class="label" for="description">Description</label>
            <textarea class="form-control" name="description">{{old('description')}}</textarea>
        </div>
        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection

{{--
    Dynamic code that would in thery add the has-error class to the input and textarea if errors are present.
    Dosnet work for some reason. Errors div works fine. I might revisit this if I want to include a red
    border when errors are found. Unlikely. Will keep this here as a note. 8-22-19
    {{ $errors->has('description') ? "has-error" : '' }}
--}}
