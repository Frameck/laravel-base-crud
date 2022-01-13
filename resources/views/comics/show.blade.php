@extends('layouts.default')

@section("page_title", "Details comic | " . $comic->id)

@section("content")
    <h2 class="my-3">Details comic n°{{ $comic->id }}</h2>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <div class="card-body">
            <ul>
                <li><h3>{{ $comic->title }}</h3></li>
                <li><strong>Price</strong>: {{ $comic->price }}$</li>
                <li><strong>Type</strong>: {{ $comic->type }}</li>
                <li><strong>Series</strong>: {{ $comic->series }}</li>
                <li><strong>Description</strong>: {{ $comic->description }}</li>
                <li><strong>Sale date</strong>: {{ $comic->sale_date }}</li>
            </ul>
            <form action="{{ route('comics.destroy', $comic->id) }}"
            method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Elimina" class="btn btn-danger">
            </form>
        </div>
    </div>
@endsection