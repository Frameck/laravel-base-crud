@extends('layouts.default')

@section("page_title", "Details comic | " . $comic->id)

@section("content")
    <h2 class="my-3">Details comic n°{{ $comic->id }}</h2>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">{{ $comic->description }}</p>
            <form action="{{ route('comics.destroy', $comic->id) }}"
            method="post">
            
                @csrf
                @method('DELETE')
                <input type="submit" value="Elimina" class="btn btn-danger">

            </form>
        </div>
    </div>
@endsection