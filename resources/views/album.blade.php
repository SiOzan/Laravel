@php
    $album = \App\Models\Album_Musik::all();
@endphp

@foreach ($album as $data)
    <h4>Lagu : {{ $data->id }}</h4>
    <h4>judul : {{ $data->judul }}</h4>
    <h4>tahun : {{ $data->tahun }}</h4>
    <h4>cover album : {{ $data->cover_album }}</h4>
    <hr>
@endforeach
