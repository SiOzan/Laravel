<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MediaFilm;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'url_media' => 'https://www.youtube.com/',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'Dede Inoen',
            'url_media' => 'https://awsimages.detik.net.id/community/media/visual/2022/03/07/konten-dede-inoen-1_169.jpeg?w=1200',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'url_media' => 'https://www.youtube.com/watch?v=nhBQRvGN4qQ&pp=ygUKZGVkZSBpbm9lbg%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'Ambatukam',
            'url_media' => 'https://asset-2.tstatic.net/belitung/foto/bank/images/2601-Dede-Inoen-2.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'Titingkalin',
            'url_media' => 'https://awsimages.detik.net.id/community/media/visual/2022/03/21/youtuber-dede-inoen-ngumpet-di-kolong-rel-kereta_169.jpeg?w=1200',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'url_media' => 'https://www.youtube.com/watch?v=iVvkMHmVWxk&pp=ygUKZGVkZSBpbm9lbg%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Angkat',
            'url_media' => 'https://www.youtube.com/watch?v=w4DZXMfD2js&pp=ygUKZGVkZSBpbm9lbg%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'url_media' => 'https://www.youtube.com/watch?v=KOAFJPHnpAE&pp=ygUKZGVkZSBpbm9lbg%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'url_media' => 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/961/2023/11/05/IMG-20231105-WA0012-3672437.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'Judul',
            'url_media' => 'https://www.youtube.com/watch?v=s00_HGwb5Q8&pp=ygUKZGVkZSBpbm9lbg%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'url_media' => 'https://www.youtube.com/watch?v=rADUhejV4KY&pp=ygUKZGVkZSBpbm9lbg%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Foto Dede Inoen',
            'url_media' => 'https://www.youtube.com/watch?v=yuJQBJOG9Go&pp=ygUKZGVkZSBpbm9lbg%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Foto Dede Inoen',
            'url_media' => 'https://www.youtube.com/watch?v=0hAf0D3cU0g&pp=ygUKZGVkZSBpbm9lbg%3D%3D' ,
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Foto Dede Inoen',
            'url_media' => 'https://www.youtube.com/watch?v=v3rOLlnK7ks&pp=ygUKZGVkZSBpbm9lbg%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'url_media' => 'https://www.youtube.com/watch?v=8vDXrQolJUc&pp=ygUKZGVkZSBpbm9lbg%3D%3D',
        ]);

    }
}
