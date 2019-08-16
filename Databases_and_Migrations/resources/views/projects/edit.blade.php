@extends('layout')
@section('title')
    Edit
@endsection

@section('content')
    <h1>Edit Project</h1>

    <form action="" method="post">
        <div class="form-group">
            <label class="label" for="title">Title</label>
            <input type="text" class="form-control" name=title placeholder="Title">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <textarea type="text" class="form-control" name=title placeholder="Discription"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Edit Project</button>
        </div>


    </form>
@endsection
