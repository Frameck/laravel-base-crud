@extends('layouts.default')

@section("page_title", "Homepage Laravel Comics")

@section("content")
    <ul>
        @foreach($comics as $comic)
            <div class="card d-inline-block me-4" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" style="max-height: 200px" alt="comic's thumb">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Type: {{ $comic->type }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('comics.show', $comic->id) }}" class="card-link">Dettagli</a>
                </div>
            </div>
        @endforeach
    </ul>
@endsection