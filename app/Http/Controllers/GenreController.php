<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StoreGenreRequest;
// use App\Http\Requests\UpdateGenreRequest;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::orderBy('id', 'desc')->get();
        return view('genre.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'genre' => 'required|max:235',
        ]);

        $genres = new Genre();
        $genres->genre = $request->genre;
        $genres->save();

        return redirect()->route('genre.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genres = Genre::findOrFail($id);
        return view('genre.show', compact('genres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genres = Genre::findOrFail($id);
        return view('genre.edit', compact('genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenreRequest  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'genre' => 'required|max:235',
        ]);

        $genres = Genre::findOrFail($id);
        $genres->genre = $request->genre;
        $genres->save();

        return redirect()->route('genre.index')->with('success', 'data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genres = Genre::findOrFail($id);
        $genres->delete();

        return redirect()->route('genre.index')->with('success', 'data berhasil dihapus!');

    }
}
