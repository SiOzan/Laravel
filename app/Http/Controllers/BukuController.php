<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penulis;
use App\Models\Genre;
use Illuminate\Http\Request;
// use App\Http\Requests\StoreBukuRequest;
// use App\Http\Requests\UpdateBukuRequest;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukus = Buku::latest()->get();
        return view('buku.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penulis = Penulis::all();
        $genres = Genre::all();
        return view('buku.create', compact('penulis', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|unique:bukus',
            'isbn' => 'required',
            'jml_hal' => 'required|numeric',
            'cover' => 'required|max:2048|mimes:png,jpg',
            'deskripsi' => 'required',
            'id_penulis' => 'required',
            'tgl_terbit' => 'required',
        ]);

        $bukus = new Buku();
        $bukus->judul = $request->judul;
        $bukus->isbn = $request->isbn;
        $bukus->jml_hal = $request->jml_hal;
        $bukus->deskripsi = $request->deskripsi;
        $bukus->id_penulis = $request->id_penulis;
        $bukus->tgl_terbit = $request->tgl_terbit;
        // upload foto
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000,9999).$img->getClientOriginalName();
            $img ->move('images/buku', $name);
            $bukus->cover = $name;
        }
        $bukus->save();

        // lampiran banyak genre di buku
        $bukus->genre()->attach($request->genre);
        return redirect()->route('buku.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bukus = Buku::findOrFail($id);
        return view('buku.show', compact('bukus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bukus = Buku::findOrFail($id);
        $genres = genre::all();
        $penulis = Penulis::all();
        $selectGenre = Genre::with('buku')->pluck('id')->toArray();
        return view('buku.edit', compact('bukus', 'genres', 'penulis', 'selectGenre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBukuRequest  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'isbn' => 'required',
            'jml_hal' => 'required|numeric',
            // 'cover' => 'required|max:2048kb|mimes:png,jpg',
            'deskripsi' => 'required',
            'id_penulis' => 'required',
            'tgl_terbit' => 'required',
        ]);

        $bukus = Buku::findOrFail($id);
        $bukus->judul = $request->judul;
        $bukus->isbn = $request->isbn;
        $bukus->jml_hal = $request->jml_hal;
        $bukus->deskripsi = $request->deskripsi;
        $bukus->id_penulis = $request->id_penulis;
        $bukus->tgl_terbit = $request->tgl_terbit;
        // upload foto
        if ($request->hasFile('cover')) {
            $bukus->deleteImage(); //untuk hapus gambarr sebelum diganti gambar baru
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/buku', $name);
            $bukus->cover = $name;
        }
        $bukus->save();

        // menganti banyak gambar di buku
        $bukus->genre()->sync($request->genre);
        return redirect()->route('buku.index')->with('success', 'data berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bukus = Buku::findOrFail($id);
        $bukus->deleteImage();
        $bukus->delete();
        $bukus->genre()->detach();

        return redirect()->route('buku.index')->with('success', 'data berhasil dihapus!');

    }
}
