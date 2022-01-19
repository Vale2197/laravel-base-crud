@extends('layout.app')

@section('content')

    <div class="comics_index">

        <div class="container">
            <div class="title mb-4 d-flex justify-content-between">
                <h1 class="m-0">
                    OUR COMICS:
                </h1>

                <button class="btn btn-warning fw-bold">
                    <a href="{{route('comics.create')}}"> Add a comic! </a> 
                </button>
            </div>

            <div class="row g-4">

                @foreach ($comics as $comic)
                
                        <div class="col-3">
                            <div class="card">
                                <img src="{{$comic->image_url}}" class="img-fluid" alt="#">
                                <div class="card-body">
                                  <h5 class="card-title">{{$comic->title}}</h5>
                                  <p class="card-text">{{$comic->series}}</p>
                                  <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">&#8364; {{$comic->price}}</a>
                                </div>
                            </div>
                        </div>
        
                @endforeach

            </div>

        </div>

    </div>
    
@endsection