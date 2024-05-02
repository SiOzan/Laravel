@php
    $film = \App\Models\Film::all();
    $singleFilm = \App\Models\Film::find(3);
    $mediaFilm = \App\Models\MediaFilm::all();
@endphp

<h2 style="color: teal">Daftar Film</h2>
@foreach ($film as $item)
    <p><h2 style="color: #808000">ID Film : {{ $item -> id }}</h2></p>
    <p>Judul Film : {{ $item -> judul }}</p>
    <p>Deskripsi Film : {{ $item -> deskripsi }}</p>

    <b>Detail Film</b>
    <p>Code Film : {{ $item->DetailFilm->code_film }}</p>
    <p>URL IMDB Film : {{ $item->DetailFilm->url_imdb }}</p>
@endforeach
<hr>

<h2 style="color: teal">Single Film</h2>
    <p><b>ID Film : </b>{{ $singleFilm -> id }}</p>
    <p><b>Judul Film : </b>{{ $singleFilm -> judul }}</p>
    <p><b>Deskripsi Film : </b>{{ $singleFilm -> deskripsi }}</p>

    <h3 style="color: 	#808000">Detail Film</h3>
    <p><b>Code Film : </b>{{ $singleFilm->DetailFilm->code_film }}</p>
    <p><b>URL IMDB Film : </b>{{ $singleFilm->DetailFilm->url_imdb }}</p>
    <hr>

    <h2 style="color: teal">Daftar Film</h2>
@foreach ($mediaFilm as $dataMedia)
    <p><h2 style="color: #808000">ID Film : {{ $dataMedia -> id }}</h2></p>
    <p>Media Type : {{ $dataMedia -> media_type }}</p>
    <p>Media Title : {{ $dataMedia -> media_ttle }}</p>
    <p>URL Media Film : {{ $dataMedia->MediaFilm->url_media }}</p>
@endforeach


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
