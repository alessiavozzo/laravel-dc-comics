@extends('layouts.app')

@section('content')
    <section id="current-series" class="bg-dark">
        <div class="container py-4">

            <div class="d-flex justify-content-end align-items-center mb-3">
                <a class="btn btn-primary" href="{{ route('comics.create') }}"> Add new comic </a>
            </div>



            <div class="table-responsive rounded">
                <table class="table table-secondary  table-hover table-bordered">
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
                            <tr class="align-middle">
                                <td scope="row">{{ $comic->id }}</td>
                                <td>{{ $comic->title }}</td>
                                <td><img width="80" src="{{ $comic->thumb }}" alt=""></td>
                                <td>{{ $comic->price }}</td>
                                <td>{{ $comic->series }}</td>
                                <td>{{ $comic->sale_date }}</td>
                                <td>{{ $comic->type }}</td>
                                <td>
                                    {{-- show single comic --}}
                                    <a class="btn btn-info" href="{{ route('comics.show', $comic) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    {{-- edit single comic --}}
                                    <a class="btn btn-warning" href="{{ route('comics.edit', $comic) }}">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    {{-- delete single comic --}}
                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalId-{{ $comic->id }}">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
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
