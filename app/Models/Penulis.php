<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    public $fillable = ['nama_penulis', 'bio'];
    public $villable = ['nama_penulis', 'bio'];
    public $timestamps = true;

    // membuat relasi one to Many ke model buku
    public function buku(){
        // data model Penulis bisa memiliki banyak data
        // dari model Buku melalui fk 'id_penulis'
        return $this->hasMany(Buku::class, 'id_penulis');
    }
}
