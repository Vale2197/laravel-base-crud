@extends('layout.app')

@section('title', 'home')
    
@section('content')
    
    <h1>
        HOME PAGE
    </h1>

    @foreach ($comics as $comic)
        <h2>
            {{$comic->title}}
        </h2>
        <hr>
    @endforeach

@endsection