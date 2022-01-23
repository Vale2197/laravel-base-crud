@extends('layout.app')

@section('content')
    
    <div class="game_show">

        <div class="container">
            <h1>
                {{$game->title}}
            </h1>

            <div class="img py-5">

                <img src="https://picsum.photos/200/300" alt="#">
            </div>

            <p>
                {{$game->description}}
            </p>
            
        </div>

    </div>

@endsection