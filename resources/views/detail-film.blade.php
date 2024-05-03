<h1>Judul Film : {{ $film->judul }}</h1>
<p>Deskripsi Film : {{ $film->deskripsi }}</p>

{{-- {{ Start One To One }} --}}
<span>
    <h3>Detail Film</h3>
    <p>Code Film : {{ $film->DetailFilm->code_film }}</p>
    <p>URL IMDB : <a href="{{ $film->DetailFilm->url_imdb }}">Klik Disini</a></p>
</span>
{{-- {{ End One To One }} --}}


{{-- {{ Start One To Many }} --}}
@foreach ($film->MediaFilm as $item)
    <p>Media Title : {{ $item->media_title }}</p>
    {{-- <p>Url Media : {{ $item->url_media }}</p> --}}
    @if ($item->media_type)
        <p>Url Media : <a href="{{ $item->url_media }}">Klik For Video</a></p>
    @else
        <img src="{{ $item->url_media }}" alt="" height="200">
    @endif
    <hr>
@endforeach
{{-- {{ End One To Many }} --}}
