@extends('layout')
@section('title')
    Show
@endsection

@section('content')
<h1>A cute little {{$pet->Type}}</h1>
    <p>Its name is {{$pet->Pet_Name}} and is {{$pet->Age}} years old.</p>
    <p>Retail Price: ${{$pet->Price}}, OBA</p>
    <p>Will be euthinized in 3 days. Buy now!!!</p>
    
    <button><a href="/Pets">Home</a></button>
@endsection