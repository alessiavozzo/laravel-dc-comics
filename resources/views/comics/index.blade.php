<div class="container">

    <div class="d-flex justify-content-between align-items-center">
        <a class="btn btn-primary" href="{{ route('comics.create') }}"> Add new comic </a>
    </div>

    <div class="row">
        <div class="col">

            @forelse ($comics as $comic)
                <a class="comic-link text-decoration-none" href="{{ route('comics.show', $comic) }}">
                    <div class="comic">
                        <img class="comic-image mb-2" src="{{ $comic->thumb }}" alt="">
                        <div class="comic-title text-white text-uppercase">{{ $comic->series }}</div>
                    </div>
                </a>

            @empty

                <p>No comics</p>
            @endforelse

        </div>
    </div>
</div>
