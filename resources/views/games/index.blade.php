@extends('layout.app')

@section('content')
    
  
       
    <div class="games_index">
        <div class="container">

            <h1>
                OUR GAMES:
            </h1>

            <div class="row g-3">

                
                @foreach($games as $game)
                   <div class="col-3">
                        <div class="card text-start|center|end">
                            <img class="card-img-top" src="https://picsum.photos/300/300" alt="#">
                            <div class="card-body">
                                <h4 class="card-title">{{$game->title}}</h4>
                                <p class="card-text">{{$game->description}}</p>
                            </div>
                        </div>
                    </div>
                 @endforeach

            </div>

            <button class="my_btn btn btn-warning mt-3">
                Pass to Admin view
            </button>

        </div>

        <div class="my_pagination">
            {{$games->links()}}
        </div>
    </div>


@endsection