@extends('layouts.default')

@section("page_title", "Homepage Laravel Comics")

@section("content")
    <h2>Details comic n°{{ $comic->id }}</h2>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">{{ $comic->description }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection