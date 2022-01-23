@extends('layout.app')

@section('content')

    <div class="admin_edit">

        <div class="container">
            @include('layout.components.error')

            <form action="{{route('games.update', $game->id)}}" method="post">
                @method('PUT')
                @csrf
    
                <div class="mb-3">
    
                  <label for="title" class="form-label fw-bold fs-4">TITLE*:</label>
                  <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{$game->title}}" aria-describedby="helpId">
                  {{-- // TITLE --}}

                  <label for="description" class="form-label fw-bold fs-4">DESCRIPTION:</label>
                  <textarea type="text-area" name="description" id="description" class="form-control @error('description') is-invalid @enderror" aria-describedby="helpId">
                    {{$game->description}}
                  </textarea>
                  {{-- // DESCRIPTION --}}

                  <label for="image" class="form-label fw-bold fs-4">IMAGE URL*:</label>
                  <input type="text" name="image" id="image"  class="form-control @error('image') is-invalid @enderror"  value="https://picsum.photos/200/300" aria-describedby="helpId">
                  {{-- // URL IMAGE --}}

                  <button type="submit" class="btn btn-warning mt-3 fw-bold">Update</button>
                </div>
                
            </form>

        </div>

    </div>
    
@endsection