@php
    $album = \App\Models\Album_Musik::all();
    $album2 = \App\Models\Album_Musik::where('tahun', '2014')->get();
    $album3 = \App\Models\Album_Musik::find(2);
    $album4 = \App\Models\Album_Musik::where('cover_album', 'Dunia Batas')->first();

@endphp

<h2 style="color: green">Menampilkan Semua Data</h2>
@foreach ($album as $data)
    <h4>Lagu : {{ $data->id }}</h4>
    <h4>judul : {{ $data->judul }}</h4>
    <h4>tahun : {{ $data->tahun }}</h4>
    <h4>cover album : {{ $data->cover_album }}</h4>
@endforeach
<hr>

<h2 style="color: green">Menampilkan Data Berdasarkan Tahun</h2>
@foreach ($album2 as $data)
    <h4>Lagu : {{ $data->id }}</h4>
    <h4>judul : {{ $data->judul }}</h4>
    <h4>tahun : {{ $data->tahun }}</h4>
    <h4>cover album : {{ $data->cover_album }}</h4>
@endforeach
<hr>

<h2 style="color: green">Menampilkan Data Berdasarkan ID(find)</h2>
    <h4>Lagu : {{ $album3->id ?? 'data kosong' }}</h4>
    <h4>judul : {{ $album3->judul ?? 'data kosong' }}</h4>
    <h4>tahun : {{ $album3->tahun ?? 'data kosong' }}</h4>
    <h4>cover album : {{ $album3->cover_album ?? 'data kosong' }}</h4>
<hr>

<h2 style="color: green">Menampilkan Data First</h2>
    <h4>Lagu : {{ $album4->id ?? 'data kosong' }}</h4>
    <h4>judul : {{ $album4->judul ?? 'data kosong' }}</h4>
    <h4>tahun : {{ $album4->tahun ?? 'data kosong' }}</h4>
    <h4>cover album : {{ $album4->cover_album ?? 'data kosong' }}</h4>
