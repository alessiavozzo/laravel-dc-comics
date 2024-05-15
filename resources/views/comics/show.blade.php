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

                {{-- ad --}}
                <div class="ad col-4 text-end">
                    <h6>ADVERTISEMENT</h6>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </div>


            </div>

        </div>

    </div>


    <div class="about">
        <div class="about-top">
            <div class="container d-flex gap-5">
                {{-- left --}}
                <div class="talent w-50">
                    <h4 class="py-4">Talent</h4>
                    <div class="art d-flex justify-content-between py-2">
                        <span class="col-4 fw-bold">Art by:</span>
                        <ul class="list-unstyled d-flex flex-wrap col-8">
                            <li><a href="#" class="text-decoration-none">Lorem.</a></li>
                            <li><a href="#" class="text-decoration-none">Minima.</a></li>
                            <li><a href="#" class="text-decoration-none">Aut.</a></li>
                            <li><a href="#" class="text-decoration-none">Consequatur.</a></li>
                            <li><a href="#" class="text-decoration-none">Possimus?</a></li>
                            <li><a href="#" class="text-decoration-none">Consequatur?</a></li>
                            <li><a href="#" class="text-decoration-none">Accusantium.</a></li>
                            <li><a href="#" class="text-decoration-none">Magni!</a></li>
                            <li><a href="#" class="text-decoration-none">Cumque.</a></li>
                            <li><a href="#" class="text-decoration-none">Sunt?</a></li>
                        </ul>
                    </div>
                    <div class="written d-flex justify-content-between py-2">
                        <span class="col-4 fw-bold">Written by:</span>
                        <ul class="list-unstyled d-flex flex-wrap col-8">
                            <li><a href="#" class="text-decoration-none">Lorem.</a></li>
                            <li><a href="#" class="text-decoration-none">Minima.</a></li>
                            <li><a href="#" class="text-decoration-none">Aut.</a></li>
                            <li><a href="#" class="text-decoration-none">Consequatur.</a></li>
                            <li><a href="#" class="text-decoration-none">Possimus?</a></li>
                            <li><a href="#" class="text-decoration-none">Consequatur?</a></li>
                            <li><a href="#" class="text-decoration-none">Accusantium.</a></li>
                            <li><a href="#" class="text-decoration-none">Magni!</a></li>
                            <li><a href="#" class="text-decoration-none">Cumque.</a></li>
                            <li><a href="#" class="text-decoration-none">Sunt?</a></li>
                        </ul>
                    </div>

                </div>

                {{-- right --}}
                <div class="specs w-50">
                    <h4 class="py-4">Specs</h4>
                    <div class="series d-flex py-2">
                        <span class="col-4 fw-bold">Series:</span>
                        <span class="col-8 text-primary text-uppercase">{{ $comic->series }}</span>
                    </div>
                    <div class="us_price d-flex py-2">
                        <span class="col-4 fw-bold">U.S. Price:</span>
                        <span class="col-8">{{ $comic->price }}</span>
                    </div>
                    <div class="sale_date d-flex py-2">
                        <span class="col-4 fw-bold">On Sale Date:</span>
                        <span class="col-8">{{ $comic->sale_date }}</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="about-bottom">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-5 gx-4">

                    @foreach ($banner_links as $key => $link)
                        <div class="col p-3">
                            <div class="product d-flex justify-content-between">
                                <div class="text text-uppercase fw-bold">{{ $link['text'] }}</div>
                                <img src="{{ Vite::asset('resources/img/' . $link['image']) }}" alt="">
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>



@endsection
