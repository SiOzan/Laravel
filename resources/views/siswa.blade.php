@php
    $siswa = \App\Models\Siswa::all();
    $siswa2 = \App\Models\Siswa::
    // = , != , < , <= , > , >= , <> , ?? 'kosong'
    orderBy('id', 'desc')
    // ->take(100)
    ->where('id', 1)
    // ->where('jenis_kelamin', 1)
    // ->groupBy('id')
    ->get();

    $siswa3 = \App\Models\Siswa::find(2);
    $siswa4 = \App\Models\Siswa::where('kelas', 'XI RPL 2')->orderBy('id', 'desc')->first();
    $siswa5 = \App\Models\Siswa::where('kelas', 'XI RPL 2')->orderBy('id', 'desc')->firstOrFail();
@endphp

<h2>First Or Fail</h2>
<h4>Id : {{ $siswa5->id ?? 'kosong' }}</h4>
<h4>Nama : {{ $siswa5->nama ?? 'kosong' }}</h4>
<h4>Kelas : {{ $siswa5->kelas ?? 'kosong' }}</h4>
<h4>Jenis Kelamin : {{ $siswa5->jenis_kelamin ?? 'kosong' }}</h4>
<hr>

<h2>First</h2>
<h4>Id : {{ $siswa4->id ?? 'kosong' }}</h4>
<h4>Nama : {{ $siswa4->nama ?? 'kosong' }}</h4>
<h4>Kelas : {{ $siswa4->kelas ?? 'kosong' }}</h4>
<h4>Jenis Kelamin : {{ $siswa4->jenis_kelamin ?? 'kosong' }}</h4>
<hr>

<h2>Tanpa Foreach</h2>
<h4>Id : {{ $siswa3->id ?? 'kosong' }}</h4>
<h4>Nama : {{ $siswa3->nama ?? 'kosong' }}</h4>
<h4>Kelas : {{ $siswa3->kelas ?? 'kosong' }}</h4>
<h4>Jenis Kelamin : {{ $siswa3->jenis_kelamin ?? 'kosong' }}</h4>
<hr>

<h2>Menampilkan Data Query</h2>
@foreach ($siswa2 as $data)
    <h4>Id : {{ $data->id }}</h4>
    <h4>Nama : {{ $data->nama }}</h4>
    <h4>Kelas : {{ $data->kelas }}</h4>
    <h4>Jenis Kelamin : {{ $data->jenis_kelamin }}</h4>
    <hr>
@endforeach

<h2>Pengulangan Data</h2>
@foreach ($siswa as $data)
    <h4>Id : {{ $data->id }}</h4>
    <h4>Nama : {{ $data->nama }}</h4>
    <h4>Kelas : {{ $data->kelas }}</h4>
    <h4>Jenis Kelamin : {{ $data->jenis_kelamin }}</h4>
@endforeach

{{-- @foreach (\App\Models\Sekolah::all() as $data)
    <h4>Nama : {{ $data->nama }}</h4>
    <h4>alamat : {{ $data->alamat }}</h4>
    <h4>email : {{ $data->email }}</h4>
    <h4>status : {{ $data->status }}</h4>
@endforeach --}}
