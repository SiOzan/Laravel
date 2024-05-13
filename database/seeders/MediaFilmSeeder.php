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
            'url_media' => 'https://www.youtube.com/embed/yAN5uspO_hk?si=xGklHAcdR9sGSKvZ',
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
            'url_media' => 'https://www.youtube.com/embed/yAN5uspO_hk?si=xGklHAcdR9sGSKvZ',
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
            'url_media' => 'https://www.youtube.com/embed/eafm1gB6SCM?si=u5tnRBTTBLkeyQtX',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Angkat',
            'url_media' => 'https://www.youtube.com/embed/eafm1gB6SCM?si=u5tnRBTTBLkeyQtX',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'url_media' => 'https://www.youtube.com/embed/eafm1gB6SCM?si=u5tnRBTTBLkeyQtX',
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
            'url_media' => 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/961/2023/11/05/IMG-20231105-WA0012-3672437.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'url_media' => 'https://www.youtube.com/embed/1UJz0O2NjOo?si=rmfky4WB_WGgMELa',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Foto Dede Inoen',
            'url_media' => 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/961/2023/11/05/IMG-20231105-WA0012-3672437.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Foto Dede Inoen',
            'url_media' => 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/961/2023/11/05/IMG-20231105-WA0012-3672437.jpg' ,
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Foto Dede Inoen',
            'url_media' => 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/961/2023/11/05/IMG-20231105-WA0012-3672437.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'url_media' => 'https://www.youtube.com/embed/1UJz0O2NjOo?si=rmfky4WB_WGgMELa',
        ]);

    }
}
