<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public $fillable = ['genre'];
    public $villable = ['genre'];
    public $timestamps = true;

    // membuat relasi Many to Many ke model buku
    public function buku(){
        // data model Genre bisa memiliki banyak data dari model Buku
        // melalui tabel 'pivot' genre_buku yang diwakili oleh id_genre & id_buku
        // dari model Buku melalui fk 'id_penulis'
        return $this->belongToMany(Buku::class, 'genre_buku', 'id_genre', 'id_buku');
    }
}
