@extends('layouts.app')

@section('content')
    <section id="current-series" class="bg-dark">
        <div class="container py-4">

            <div class="d-flex justify-content-end align-items-center mb-3">
                <a class="btn btn-success" href="{{ route('comics.create') }}"> Add new comic </a>
            </div>



            <div class="table-responsive rounded">
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
                                    {{-- show single comic --}}
                                    <a href="{{ route('comics.show', $comic) }}">Dettagli</a>
                                    {{-- edit single comic --}}
                                    <a href="{{ route('comics.edit', $comic) }}">Modifica</a>
                                    {{-- delete single comic --}}
                                    @include('partials.modal-delete')

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
@endsection
