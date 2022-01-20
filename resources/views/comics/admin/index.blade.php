@extends('layout.app')

@section('title', 'admin')
    

@section('content')
    
    <div class="admin_index">

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
                            <strong> SERIES </strong> 
                        </td>
                        {{-- /series --}}
    
                        <td>
                            <strong> PRICE </strong> 
                        </td>
                        {{-- /price --}}

                        <td>
                            <strong> ACTIONS </strong>
                        </td>
                        {{-- /price --}}
    
                    </tr>
                </thead>
    
                <tbody>
    
                    @foreach ($comics as $comic)
                        <tr>
                            <td>
                                {{$comic->id}}
                            </td>
                            {{-- /id --}}
    
                            <td>
                                {{$comic->title}}
                            </td>
                            {{-- /title --}}
    
                            <td>
                                {{$comic->series}}
                            </td>
                            {{-- /series --}}
    
                            <td>
                                {{$comic->price}}
                            </td>
                            {{-- /price --}}

                            <td>
                                <a href="{{route('comics.edit', $comic->id)}}"> <i class="far fa-edit"></i> </a>
                                <a href="{{route('comics.show', $comic->id)}}"> <i class="fas fa-eye"></i> </a>
                                <a href=""> <i class="fas fa-trash-alt"></i> </a>
                            </td>
                            {{-- /price --}}
    
                        </tr>
                    @endforeach
    
                </tbody>
            </table>

        </div>

        <div class="my_pagination">
            {{$comics->links()}}
        </div>
    </div>

@endsection