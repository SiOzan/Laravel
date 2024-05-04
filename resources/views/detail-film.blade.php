@extends('layout.layout')
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ $film->judul }}</h1>
                <p class="lead text-muted">{{ $film->deskripsi }}</p>
                <p>
                    <a href="{{ url($film->DetailFilm->url_imdb) }}" class="btn btn-primary my-2">Lihat Halaman IMDB</a>
                    <a href="{{ url('/film') }}" class="btn btn-secondary my-2">Kembali KE Halaman Home</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($film->MediaFilm as $item)
                    @if ($item->media_type)
                        <p>Url Media : <a href="{{ $item->url_media }}">Klik For Video</a></p>
                    @else
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ $item->url_media }}" class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                </img>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
@endsection
