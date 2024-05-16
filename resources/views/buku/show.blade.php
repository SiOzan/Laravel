@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Buku
                        <a href="{{route('buku.index')}}" class="btn btn-sm btn-primary" style="float: right;">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Judul Buku : </label>
                            <b>{{$bukus->judul}}</b>
                        </div>
                        <div class="mb-2">
                            <label for="">Judul Buku : </label>
                            <img src="{{ asset('images/buku/'. $bukus->cover)}}" alt="" style="width: 200px">
                        </div>
                        <div class="mb-2">
                            <label for="">Penulis : </label>
                            <b>{{$bukus->penulis->nama_penulis}}</b>
                        </div>
                        <div class="mb-2">
                            <label for="">Tanggal Terbit : </label>
                            <b>{{ date('d-m-y', strtotime($bukus->tgl_terbit)) }}</b>
                        </div>
                        <div class="mb-2">
                            <label for="">Jumlah Halaman : </label>
                            <b>{{$bukus->jml_hal}}</b> hal
                        </div>
                        <div class="mb-2">
                            <label for="">Genre : </label>
                            <ol>
                                @foreach ($bukus->genre as $genre )
                                    <li>{{ $genre->genre }}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection