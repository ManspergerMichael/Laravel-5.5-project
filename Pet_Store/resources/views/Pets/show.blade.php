@extends('layout')
@section('title')
    Show
@endsection

@section('content')
<h1>A cute little {{$pet->Type}}</h1>
    <p>Her name is {{$pet->Pet_Name}} and she is {{$pet->Age}} years old.<p>
    
@endsection