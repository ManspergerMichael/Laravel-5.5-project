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
    </tr>
    @foreach($pets as $pet)
        <tr>
            <td>{{$pet -> Pet_Name}}</td>
            <td>{{$pet -> Type}}</td>
            <td>{{$pet -> Age}}</td>
            <td>{{$pet -> Price}}</td>
        </tr>
        
    @endforeach
</table>
@endsection