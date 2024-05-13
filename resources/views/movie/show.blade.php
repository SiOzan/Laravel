@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col" style="width: 10rem;">
                <div class="card">
                    <img src="{{ $movie->cover_url }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">{{ $movie->title }}</p>
                        <p>Jumlah Viewer : <b>{{ $movie->viewer }}</b></p>
                        <p>Deskripsi : {{ $movie->description }}</p>
                        <p><a href="{{ $movie->trailer_url }}">Link</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
