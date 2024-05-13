@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <img src="{{ $movie->cover_url }}" class="card-img-top" alt="..." width="100%" height="500px">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="movie/{{ $movie->id }}"> {{ $movie->title }} </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
