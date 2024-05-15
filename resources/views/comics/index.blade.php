@extends('layouts.app')

@section('content')
    <section id="current-series" class="bg-dark">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <a class="btn btn-primary" href="{{ route('comics.create') }}"> Add new comic </a>
            </div>



            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">TITLE</th>
                            <th scope="col">IMAGE</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">SERIES</th>
                            <th scope="col">SALE DATE</th>
                            <th scope="col">TYPE</th>
                            <th scope="col">ACTIONS</th>


                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($comics as $comic)
                            <tr class="">
                                <td scope="row">{{ $comic->id }}</td>
                                <td>{{ $comic->title }}</td>
                                <td><img width="80" src="{{ $comic->thumb }}" alt=""></td>
                                <td>{{ $comic->price }}</td>
                                <td>{{ $comic->series }}</td>
                                <td>{{ $comic->sale_date }}</td>
                                <td>{{ $comic->type }}</td>
                                <td>
                                    <a href="{{ route('comics.show', $comic) }}">Show</a>

                                </td>

                            </tr>
                        @empty

                            <tr class="">
                                <td scope="row" colspan="7">Nothing to show</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>



            <div class="controls mt-3">
                {{ $comics->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>

    <section id="buy-banner" class="bg-primary py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-5 gx-4">

                @foreach ($banner_links as $key => $link)
                    <div class="col">
                        <div class="product d-flex align-items-center gap-2">
                            <img src="{{ Vite::asset('resources/img/' . $link['image']) }}" alt="">
                            <div class="text text-uppercase text-white">{{ $link['text'] }}</div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
