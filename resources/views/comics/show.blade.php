@extends('layout.app')

@section('content')
    
    <div class="comics_show">

        <div class="container">
            <h1>
                {{$comic->title}}
            </h1>

            <div class="img py-5">

                <img src="{{$comic->image_url}}" alt="#">
            </div>

            <p>
                {{$comic->description}}
            </p>
            
            <p>
                Price: <strong>&#8364; {{$comic->price}}</strong> 
            </p>

            <button class="btn btn-primary fw-bold">
                BUY
            </button>
        </div>

    </div>

@endsection