@extends('layouts.app')

@section('page-title', 'Comic')

@section('content')
    {{-- dividing blue banner --}}
    <div id="divide-banner" class="bg-primary" style="height: 70px"></div>

    {{-- single comic --}}
    <div class="comic">
        <div class="container">

            <div class="comic-specs d-flex align-items-center justify-content-evenly my-5 p-3 border rounded border-primary">
                {{-- left --}}
                <div class="col-4">
                    <img class="index-image" width="300" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>
                {{-- right --}}
                <div class="col-8">
                    <div class="comic-info">
                        {{-- title --}}
                        <h2 class="comic-title mb-4">{{ $comic->title }}</h2>
                        {{-- price --}}
                        <div class="comic-price mb-3 d-flex justify-content-between p-2 fw-bold">
                            <div>
                                <span class="us-price"> U.S. Price:</span>
                                <span class="price text-white">{{ $comic->price }}</span>
                            </div>
                            <div class="availability">AVAILABLE</div>
                        </div>
                        {{-- description --}}
                        <div class="description mb-3">{{ $comic->description }}</div>
                        <div class="series d-flex mb-3">
                            <span class="col-3 fw-bold">Series:</span>
                            <span class="col-9 text-primary text-uppercase">{{ $comic->series }}</span>
                        </div>
                        <div class="us_price d-flex mb-3">
                            <span class="col-3 fw-bold">U.S. Price:</span>
                            <span class="col-9">{{ $comic->price }}</span>
                        </div>
                        <div class="sale_date d-flex mb-3">
                            <span class="col-3 fw-bold">On Sale Date:</span>
                            <span class="col-9">{{ $comic->sale_date }}</span>
                        </div>
                    </div>

                    <div class="buttons">
                        <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">Modifica</a>
                        @include('partials.modal-delete')

                    </div>
                </div>
            </div>

        </div>

    </div>





@endsection
