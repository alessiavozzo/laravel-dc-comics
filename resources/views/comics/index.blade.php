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

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalId-{{ $comic->id }}">
                                        Elimina
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitleId-{{ $comic->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    {{-- title --}}
                                                    <h5 class="modal-title" id="modalTitleId-{{ $comic->id }}">
                                                        Stai eliminando {{ $comic->title }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                {{-- body - longer msg --}}
                                                <div class="modal-body">You are about to delete this record. There's no
                                                    turning back. Do you want to proceed?</div>

                                                {{-- buttons --}}
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Annulla
                                                    </button>

                                                    <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            Elimina
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
