@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mt-3 text-center">Add comic</h3>

        <form action="{{ route('comics.store') }}" method="post" class="pt-3 pb-5">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="helpId" placeholder="" value="{{ old('title') }}" required />
                <small id="titleHelper" class="form-text text-muted">Scrivi il titolo del comic</small>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" aria-describedby="helpId" placeholder="" value="{{ old('thumb') }}" required />
                <small id="thumbHelper" class="form-text text-muted">Aggiungi il link all'immagine</small>
                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="helpId" placeholder="" value="{{ old('price') }}" />
                <small id="priceHelper" class="form-text text-muted">Aggiungi il prezzo </small>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="helpId" placeholder="" value="{{ old('series') }}" />
                <small id="seriesHelper" class="form-text text-muted">Scrivi la serie</small>
                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    id="sale_date" aria-describedby="helpId" placeholder="" value="{{ old('sale_date') }}" />
                <small id="sale_dateHelper" class="form-text text-muted">Scrivi la data di vendita</small>
                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="helpId" placeholder="" value="{{ old('type') }}" />
                <small id="typeHelper" class="form-text text-muted">Scrivi il tipo di comic</small>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="7">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Add
            </button>



        </form>
    </div>
@endsection
