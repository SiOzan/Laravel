@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center"">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success fade show" role="alert">
                        {{session('success')}}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">Data Penulis
                        <a href="{{route('penulis.create')}}" class="btn btn-sm btn-outline-primary" style="float: right;">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table-responsive">
                                <tr>
                                    <th class="col-1">No</th>
                                    <th class="col-2">Nama Penulis</th>
                                    <th class="col-3">Aksi</th>
                                </tr>
                                @php $no = 1; @endphp
                                @foreach ($penulis as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$item->nama_penulis}}</td>
                                        <td class="py-2">
                                            <form action="{{route('penulis.destroy', $item->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{route('penulis.edit', $item->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                                <a href="{{route('penulis.show', $item->id)}}" class="btn btn-sm btn-outline-success">Show</a>
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