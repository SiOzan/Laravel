<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    public $fillable = ['judul','isbn', 'deskripsi', 'jml_hal', 'cover','tgl_terbit', 'id_penulis'];
    public $villable = ['judul','isbn', 'deskripsi', 'jml_hal', 'cover','tgl_terbit', 'id_penulis'];
    public $timestamps = true;

    public function penulis(){
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }

    // menghapus foto
    public function deleteImage(){
        if ($this->cover && file_exists(public_path('images/buku/'. $this->cover))) {
            return unlink(public_path('images/buku/'. $this->cover));
        }
    }

    // membuat relasi Many to Many ke model buku
    public function genre(){
        // data model Genre bisa memiliki banyak data dari model Buku
        // melalui tabel 'pivot' genre_buku yang diwakili oleh id_genre & id_buku
        // dari model Buku melalui fk 'id_penulis'
        return $this->belongsToMany(Genre::class, 'genre_buku', 'id_buku', 'id_genre');
    }
}
