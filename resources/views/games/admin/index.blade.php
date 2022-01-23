@extends('layout.app')

@section('content')
    
    <div class="admin_games">

        <div class="container">

            <table>


                <thead>
                    <tr>
                        <td>
                            <strong> ID </strong> 
                        </td>
                        {{-- /id --}}
    
                        <td>
                            <strong> TITLE </strong> 
                        </td>
                        {{-- /title --}}
    
                        <td>
                            <strong> IMAGE </strong> 
                        </td>
                        {{-- /series --}}
    
                        <td>
                            <strong> DESCRIPTION </strong> 
                        </td>
                        {{-- /price --}}

                        <td>
                            <strong> ACTIONS </strong>
                        </td>
                        {{-- /price --}}
    
                    </tr>
                </thead>
    
                <tbody>
    
                    @foreach ($games as $game)
                        <tr>
                            <td>
                                {{$game->id}}
                            </td>
                            {{-- /id --}}
    
                            <td>
                                {{$game->title}}
                            </td>
                            {{-- /title --}}
    
                            <td>
                                {{$game->image}}
                            </td>
                            {{-- /series --}}
    
                            <td>
                                {{$game->description}}
                            </td>
                            {{-- /price --}}

                            <td class="d-flex">
                                <a href="{{route('games.edit', $game->id)}}"> <i class="far fa-edit"></i> </a>
                                <a href="{{route('games.show', $game->id)}}"> <i class="fas fa-eye"></i> </a>

                               {{--  <form action="{{route('comics.destroy', $game->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form> --}}
                                <button class="deleteComic btn">
                                    <i class="fas fa-trash-alt"></i>
                                </button>

                            </td>
                            {{-- /price --}}
                            
                        </tr>
                        <div class="allertWindow d-flex flex-column justify-content-center align-items-center">
                            <p class="m-0 text-center pb-3"> 
                                <strong> ATTENZIONE: </strong>
                            </p> 
                            <p class="px-4 text-center">
                                l'articolo selezionato ( <strong> {{$game->title}} </strong>  ), verrà rimosso pper sempre.. continuare?
                            </p>
                            
                            <div class="btns">

                                <form action="{{route('games.destroy', $game->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf

                                    <button type="submit" class="btn btn-success">
                                        SI
                                    </button>
                                
                                </form>

                                <button class="btnNoComic btn btn-danger">
                                    NO
                                </button>
                            </div>
                        </div>
                        @endforeach
                        
                </tbody>
            </table>

        </div>

        <div class="my_pagination">
            {{$games->links()}}
        </div>
    </div>

@endsection