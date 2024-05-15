@extends('layouts.app')

@section('page-title', 'Comic')

@section('content')
    {{-- dividing blue banner --}}
    <div id="divide-banner" class="bg-primary" style="height: 70px"></div>

    {{-- single comic --}}
    <div class="comic">
        <div class="container">
            {{-- image --}}
            <img class="single-comic-image" src="{{ $comic->thumb }}" alt="{{ $comic['title'] }}">

            <div class="comic-and-ad d-flex py-5">

                {{-- comic info --}}
                <div class="comic-info col-8">
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
                </div>


            </div>

        </div>

    </div>






@endsection
