@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success fade show" role="alert">
                        {{session('success')}}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">Data Buku
                        <a href="{{route('buku.create')}}" class="btn btn-sm btn-outline-primary" style="float: right;">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Judul Buku</th>
                                    <th>Penulis</th>
                                    <th>Cover</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no = 1; @endphp
                                @foreach ($bukus as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$item->judul}}</td>
                                        <td>{{$item->penulis->nama_penulis}}</td>
                                        <td><img src="{{ asset('images/buku/'. $item->cover) }}" alt="" style="width: 100px;"></td>
                                        <td class="py-2">
                                            <form action="{{route('buku.destroy', $item->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{route('buku.edit', $item->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                                <a href="{{route('buku.show', $item->id)}}" class="btn btn-sm btn-outline-success">Show</a>
                                                <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection