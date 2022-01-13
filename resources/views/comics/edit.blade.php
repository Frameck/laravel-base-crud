@extends('layouts.default');

@section('page_title', 'Modifica comic | ' . $comic->id);

@section('content')
    <h2 class="my-3">Modify comic n°{{ $comic->id }}</h2>

    <div class="container" style="height: calc(100vh - 176px)">
        <form action="{{ route('comics.update'), $comic->id }}" method="post">
            
            @csrf
            @method('PUT')

            <div class="text-start mt-5">
                <div class="mb-3">
                    <label for="field_title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="field_title"
                    value="{{ $comic->title }}">
                </div>
                
                <div class="mb-3">
                    <label for="field_price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="field_price"
                    value="{{ $comic->price }}">
                </div>

                <div class="mb-3">
                    <label for="field_thumb" class="form-label">Poster</label>
                    <input type="url" class="form-control" name="thumb" id="field_thumb"
                    value="{{ $comic->thumb }}">
                </div>
                
                <div class="mb-3">
                    <label for="field_series" class="form-label">Series</label>
                    <input type="text" class="form-control" name="series" id="field_series"
                    value="{{ $comic->series }}">
                </div>

                <div class="mb-3">
                    <label for="field_sales" class="form-label">Sale date</label>
                    <input type="date" class="form-control" name="sale_date" id="field_sales"
                    value="{{ $comic->sale_date }}">
                </div>
        
                <div class="mb-3">
                    <label for="field_type" class="form-label">Tipology</label>
                    <input type="text" class="form-control" name="type" id="field_type"
                    value="{{ $comic->type }}">
                </div>
                
                <div class="mb-3">
                    <label for="field_description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="field_description"
                    value="{{ $comic->description }}">
                </div>


                <div class="text-center">
                    <button class="btn btn-secondary" type="reset">Reset</button>
                    <button class="btn btn-success" type="submit">Salva</button>
                </div>
                {{-- <input type="submit" value="Modifica" class="btn btn-primary"> --}}
            </div>
        </form>
    </div>
@endsection