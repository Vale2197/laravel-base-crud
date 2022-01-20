@extends('layout.app')

@section('content')
    
    <div class="comics_create">

        <div class="container">

            @include('layout.components.error')

            <form action="{{route('comics.store')}}" method="post">
                @csrf
    
                <div class="mb-3">
    
                  <label for="title" class="form-label fw-bold fs-4">TITLE*:</label>
                  <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" required placeholder="title here" aria-describedby="helpId" value="{{old('title')}}">
                  {{-- // TITLE --}}

                  <label for="series" class="form-label fw-bold fs-4">SERIES:</label>
                  <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror"  placeholder="series here" aria-describedby="helpId"
                  value="{{old('series')}}">
                  {{-- // SERIES --}}

                  <label for="description" class="form-label fw-bold fs-4">DESCRIPTION:</label>
                  <textarea type="text-area" name="description" id="description" class="form-control @error('description') is-invalid @enderror"  placeholder="description here" aria-describedby="helpId"> {{old('description')}}"
                  </textarea>
                  {{-- // DESCRIPTION --}}

                  <label for="image_url" class="form-label fw-bold fs-4">IMAGE URL*:</label>
                  <input type="text" name="image_url" id="image_url" required class="form-control @error('image_url') is-invalid @enderror"  placeholder="image_url here" aria-describedby="helpId" value="{{old('image_url')}}">
                  {{-- // URL IMAGE --}}

                  <label for="price" class="form-label fw-bold fs-4"> PRICE*: </label>
                  <input type="text" name="price" id="price" required class="form-control @error('price') is-invalid @enderror"  placeholder="price here" aria-describedby="helpId" value="{{old('price')}}">
                  {{-- // PRICE --}}

                  <button type="submit" class="btn btn-success fw-bold">Add your comic</button>
                </div>
                
            </form>

        </div>
    </div>

@endsection