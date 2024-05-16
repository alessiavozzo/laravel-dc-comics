@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mt-3 text-center">Add comic</h3>

        {{-- update deve gestire la richiesta --}}
        <form action="{{ route('comics.update') }}" method="post" class="pt-3 pb-5">
            @csrf
            {{-- cambio method --}}
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    placeholder="" />
                <small id="titleHelper" class="form-text text-muted">Scrivi il titolo del comic</small>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId"
                    placeholder="" />
                <small id="thumbHelper" class="form-text text-muted">Aggiungi il link all'immagine</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                    placeholder="" />
                <small id="priceHelper" class="form-text text-muted">Aggiungi il prezzo </small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="helpId"
                    placeholder="" />
                <small id="seriesHelper" class="form-text text-muted">Scrivi la serie</small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId"
                    placeholder="" />
                <small id="sale_dateHelper" class="form-text text-muted">Scrivi la data di vendita</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId"
                    placeholder="" />
                <small id="typeHelper" class="form-text text-muted">Scrivi il tipo di comic</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="7"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Add
            </button>



        </form>
    </div>
@endsection
