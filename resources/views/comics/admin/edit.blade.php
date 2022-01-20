@extends('layout.app')

@section('content')

    <div class="admin_edit">

        <div class="container">
            @include('layout.components.error')

            <form action="{{route('comics.update', $comic->id)}}" method="post">
                @method('PUT')
                @csrf
    
                <div class="mb-3">
    
                  <label for="title" class="form-label fw-bold fs-4">TITLE*:</label>
                  <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{$comic->title}}" aria-describedby="helpId">
                  {{-- // TITLE --}}

                  <label for="series" class="form-label fw-bold fs-4">SERIES:</label>
                  <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror"  value="{{$comic->series}}" aria-describedby="helpId">
                  {{-- // SERIES --}}

                  <label for="description" class="form-label fw-bold fs-4">DESCRIPTION:</label>
                  <textarea type="text-area" name="description" id="description" class="form-control @error('description') is-invalid @enderror" aria-describedby="helpId">
                    {{$comic->description}}
                  </textarea>
                  {{-- // DESCRIPTION --}}

                  <label for="image_url" class="form-label fw-bold fs-4">IMAGE URL*:</label>
                  <input type="text" name="image_url" id="image_url"  class="form-control @error('image_url') is-invalid @enderror"  value="{{$comic->image_url}}" aria-describedby="helpId">
                  {{-- // URL IMAGE --}}

                  <label for="price" class="form-label fw-bold fs-4"> PRICE*: </label>
                  <input type="text" name="price" id="price"  class="form-control @error('price') is-invalid @enderror"  value="{{$comic->price}}" aria-describedby="helpId">
                  {{-- // PRICE --}}

                  <button type="submit" class="btn btn-warning mt-3 fw-bold">Update</button>
                </div>
                
            </form>

        </div>

    </div>
    
@endsection