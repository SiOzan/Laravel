@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit Data Buku
                        <a href="{{route('buku.index')}}" class="btn btn-sm btn-primary" style="float: right;">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('buku.update', $bukus->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="">Judul</label>
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $bukus->judul) }}">
                                        @error('judul')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Isbn</label>
                                        <input type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn" value="{{ old('isbn', $bukus->isbn) }}">
                                        @error('isbn')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="">Jumlah Halaman</label>
                                        <input type="number" class="form-control @error('jml_hal') is-invalid @enderror" name="jml_hal" value="{{ old('jml_hal', $bukus->jml_hal) }}">
                                        @error('jml_hal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Tanggal Terbit</label>
                                        <input type="date" class="form-control @error('tgl_terbit') is-invalid @enderror" name="tgl_terbit" value="{{ old('tgl_terbit', $bukus->tgl_terbit) }}">
                                        @error('tgl_terbit')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong> 
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="">Cover</label>
                                @if($bukus->cover)
                                    <p><img src="{{ asset('images/buku/'. $bukus->cover)}}" alt="cover" width="100px"></p>
                                @endif
                                <input type="file" class="form-control @error('cover') is-invalid @enderror" name="cover">
                                @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Penulis</label>
                                <select class="form-control @error('id_penulis') is-invalid @enderror" name="id_penulis">
                                    <option value="">Pilih Penulis</option>
                                    @foreach ($penulis as $data)
                                        <option value="{{$data->id}}" {{ $data->id == $bukus->id_penulis ? 'selected' : '' }}>{{$data->nama_penulis}}</option>
                                    @endforeach
                                </select>
                                @error('id_penulis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Genre</label>
                                <select class="form-select" name="genre[]" multiple>
                                    @foreach ($genres as $data)
                                        <option value="{{$data->id}}" {{ in_array($data->id, $selectGenre) ? 'selected' : '' }}>{{$data->genre}}</option>
                                    @endforeach
                                </select>
                                @error('id_genre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Deskripsi Buku</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi">{{ old('deskripsi', $bukus->deskripsi) }}</textarea>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <button class="btn btn-sm btn-success" type="submit">simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection