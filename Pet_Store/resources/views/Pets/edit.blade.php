@extends('layout')
@section('title')Edit @endsection

@section('content')

<h1>Edit a pet</h1>

<form action="/Pets/{{$pet->id}}" method="POST">

    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    
    <div class="form-group">
        <label class="label" for="Pet_Name">Name</label>
        <input type="text" class="form-control" name="Pet_Name" value="{{$pet->Pet_Name}}">
    </div>
    <div class="form-group">
            <label class="label" for="type">Type</label>
            <input type="text" class="form-control" name="type" value="{{$pet->Type}}">
        </div>
    <div class="form-group">
        <label class="label" for="age">Age</label>
        <input type="number" class="form-control" name="age" value="{{$pet->Age}}">
    </div>
    <div class="form-group">
        <label class="label" for="price">Price</label>
        <input type="number" class="form-control" name="price" value="{{$pet->Price}}">
    </div>
    <div >
        <button class="btn btn-success" type="submit">Edit Pet</button>
    </div>
</form>



<form action="/Pets/{{$pet->id}}" method="POST">

    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    
    <button class="btn btn-danger" type="submit">Pet Adopted</button>
</form>


@endsection