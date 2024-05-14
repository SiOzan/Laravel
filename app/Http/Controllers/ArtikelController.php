<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function getArtikel()
    {
        // melihat semua data yang ada di dalam model "Movie"
        $artikel = Artikel::all();
        // dump data atau melihat isi data dari sebuah variable
        // dd($movies);
        // passing data movie ke view "movie.index"
        return view('artikel.artikel', compact('artikel'));
    }

    public function getArtikelById($id)
    {
        // menampilkan data berdasarkan id yang di pilih
        $artikel = Artikel::findOrFail($id);
        return view('artikel.IdArtikel', compact('artikel'));
    }

    public function getArtikelByKategori($kategori)
    {
        // menampilkan data berdasarkan kategori yang di pilih
        $artikel = Artikel::where('kategori', $kategori)->get();
        return view('artikel.KategoriArtikel', compact('artikel'));
    }
}
