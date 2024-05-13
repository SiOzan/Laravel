@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Perkenalan
                    </div>
                    <div class="card-body">
                        <p>Nama : {{$data['nama']}}</p>
                        <p>Alamat : {{$data['alamat']}}</p>
                        <p>Agama : {{$data['agama']}}</p>
                        <p>Jenis Kelamin : {{$data['jk']}}</p>
                        <p>Hobi : </p>
                        <ol>
                            @foreach($data['hobi'] as $item)
                                <li>{{$item}}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection