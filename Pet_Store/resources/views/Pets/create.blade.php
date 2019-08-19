@extends('layout')
@section('title')Create @endsection

@section('content')

<h1>Create A new Pet</h1>
<div>
    <form action="/Pets" method="POST">
        {{ csrf_field() }}
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
        <div class="form-group">
            <button type="submit">Create Pet</button>
        </div>
    </form>
</div>

@endsection