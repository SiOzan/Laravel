{{-- @php
    $film = \App\Models\Film::all();
    $singleFilm = \App\Models\Film::find(3);
    $detailFilm = \App\Models\DetailFilm::all();
    $mediaFilm = \App\Models\MediaFilm::all();
@endphp

<h1 style="color: Gold">Daftar Film</h1>
@foreach ($film as $data)
    <h2>ID Film : {{ $data->id }}</h2>
    <h2>JUDUL Film : {{ $data->judul }}</h2>
    <a href="{{ url('film/'. $data->id) }}">PENCET BElAH DIE</a>
@endforeach --}}

@extends('layout.layout')
@section('content')
    @php
        $film = \App\Models\Film::all();
    @endphp
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($film as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">{{ $item->judul }}</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">{{ $item->deskripsi }}.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ url('film/'. $item->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

{{-- <h2 style="color: teal">Daftar Film</h2>
@foreach ($film as $orangTua)
    <p><h2 style="color: #808000">ID Film : {{ $orangTua ->id }}</h2></p>
    <p>Judul Film : {{ $orangTua ->judul }}</p>
    <p>Deskripsi Film : {{ $orangTua ->deskripsi }}</p>

    <b>Detail Film</b>
    <p>Code Film : {{ $orangTua->DetailFilm->code_film }}</p>
    <p>URL IMDB Film : {{ $orangTua->DetailFilm->url_imdb }}</p>

    <b>Media Film</b>
    @foreach ($orangTua->MediaFilm as $item)
        <p>Judul Media : {{ $item->media_title }}</p>
        <p>URL Media : {{ $item->url_media }}</p>
    @endforeach
    <hr>
@endforeach
<hr>

<h2 style="color: teal">Single Film</h2>
    <p><b>ID Film : </b>{{ $singleFilm ->id }}</p>
    <p><b>Judul Film : </b>{{ $singleFilm ->judul }}</p>
    <p><b>Deskripsi Film : </b>{{ $singleFilm ->deskripsi }}</p>

    <h3 style="color: 	#808000">Detail Film</h3>
    <p><b>Code Film : </b>{{ $singleFilm->DetailFilm->code_film }}</p>
    <p><b>URL IMDB Film : </b>{{ $singleFilm->DetailFilm->url_imdb }}</p>
<hr> --}}


{{-- <h2 style="color: teal">Daftar Film</h2> --}}
{{-- @foreach ($detailfilm as $anak)
    <p><h2 style="color: #808000">ID Film : {{ $anak -> id }}</h2></p>
    <p>Judul Film : {{ $anak -> judul }}</p>
    <p>Deskripsi Film : {{ $anak -> deskripsi }}</p>

    <b>Detail Film</b>
    <p>Code Film : {{ $anak->DetailFilm->code_film }}</p>
    <p>URL IMDB Film : {{ $anak->DetailFilm->url_imdb }}</p>
@endforeach
<hr> --}}
