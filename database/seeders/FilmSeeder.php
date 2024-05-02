<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::insert([
            'judul' => 'Shogun',
            'deskripsi' => 'lorem ipsum.....'
        ]);
        Film::insert([
            'judul' => 'Baby Reindeer',
            'deskripsi' => 'lorem ipsum.....'
        ]);
        Film::insert([
            'judul' => 'Desxter',
            'deskripsi' => 'lorem ipsum.....'
        ]);
    }
}