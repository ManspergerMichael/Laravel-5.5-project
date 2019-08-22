@extends('layout')
@section('title')Home @endsection

@section('content')

<h1>Welcome To Crazy Elmo's discount pet store</h1>
<table class="table">
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Age</th>
        <th>Price</th>
        <th class="col-sm-2">Actions</th>
    </tr>
    @foreach($pets as $pet)
        <tr>
            <td>{{$pet -> Pet_Name}}</td>
            <td>{{$pet -> Type}}</td>
            <td>{{$pet -> Age}}</td>
            <td>{{$pet -> Price}}</td>
            <td class="col-sm-2"><button><a href="/Pets/{{$pet->id}}">Show</a></button> <button><a href="/Pets/{{$pet->id}}/edit">Edit</a></button></td>
        </tr>
        
    @endforeach
</table>
<button><a href="/Pets/create">Add a pet</a></button>
@endsection