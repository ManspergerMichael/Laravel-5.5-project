@extends('layout')

@section('title')Home @endsection
{{-- OR @section('title', 'Home') --}}

@section('content')
<h3>Big Booty Bitches</h3>
<p>{!! $alert !!}</p>

<ul>
    {{-- Blade Syntax. Gets compiled down to php--}}
@foreach($tasks as $task)
    <li>{{$task}}</li>
@endforeach
</ul>


@endsection
   

