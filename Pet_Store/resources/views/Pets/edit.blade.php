@extends('layout')
@section('title')Edit @endsection

@section('content')

<h1>Edit a pet</h1>

<div>
<form action="/Pets/{{$pet->id}}" method="POST">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label class="label" for="Pet_Name">Name</label>
            <input type="text" class="form-control" name=Pet_Name placeholder="Pet Name">
        </div>
        <div class="form-group">
                <label class="label" for="type">Type</label>
                <input type="text" class="form-control" name=type placeholder="type">
            </div>
        <div class="form-group">
            <label class="label" for="age">Age</label>
            <input type="number" class="form-control" name=age>
        </div>
        <div class="form-group">
            <label class="label" for="price">Price</label>
            <input type="number" class="form-control" name=price>
        </div>
        <div >
            <button class="btn btn-success" type="submit">Edit Pet</button>
        </div>
    </form>
</div>

<div>
    <form action="/Pets/{{$pet->id}}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" type="submit">Edit Pet</button>
    </form>
</div>

@endsection