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
            'media_title' => '',
            'url_media' => 'https://www.youtube.com/',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'Dede Inoen',
            'url_media' => 'https://www.google.com/imgres?q=dede%20inoen&imgurl=https%3A%2F%2Fthumb.viva.id%2Fintipseleb%2F1265x711%2F2022%2F03%2F24%2F623c172497181-dede-inoen.jpg&imgrefurl=https%3A%2F%2Fwww.intipseleb.com%2Flokal%2F28346-profil-dan-agama-dede-inoen-viral-sebagai-raja-jin-sempat-pesantren%3Fpage%3D2&docid=QHrk5wTrIk-DOM&tbnid=WZJ7WNFaqEla2M&vet=12ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECHoQAA..i&w=1265&h=711&hcb=2&ved=2ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECHoQAA',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => '',
            'url_media' => 'https://www.youtube.com/watch?v=nhBQRvGN4qQ&pp=ygUKZGVkZSBpbm9lbg%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'Ambatukam',
            'url_media' => 'https://www.google.com/imgres?q=dede%20inoen&imgurl=https%3A%2F%2Flookaside.fbsbx.com%2Flookaside%2Fcrawler%2Fmedia%2F%3Fmedia_id%3D61554708495953&imgrefurl=https%3A%2F%2Fwww.facebook.com%2Fp%2FClip-Dede-Inoen-61554708495953%2F&docid=Ow4oQbIrk0wzKM&tbnid=NULj7qn_LE1SHM&vet=12ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECCAQAA..i&w=641&h=800&hcb=2&ved=2ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECCAQAA',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_type' => 'Titingkalin',
            'url_media' => 'https://www.google.com/imgres?q=dede%20inoen&imgurl=https%3A%2F%2Fawsimages.detik.net.id%2Fcommunity%2Fmedia%2Fvisual%2F2022%2F03%2F07%2Fmukbang-dede-inoen-3_169.png%3Fw%3D1200&imgrefurl=https%3A%2F%2Fwww.detik.com%2Fjabar%2Fberita%2Fd-5979775%2Fdeddy-corbuzier-bela-dede-inoen-pemakan-raja-jin-dari-nyinyiran-netizen&docid=mOGL7vWKhkBhxM&tbnid=sQFah9lX7mbdtM&vet=12ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECH4QAA..i&w=1200&h=674&hcb=2&ved=2ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECH4QAA',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => '',
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
            'media_title' => '',
            'url_media' => 'https://www.youtube.com/watch?v=KOAFJPHnpAE&pp=ygUKZGVkZSBpbm9lbg%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => '',
            'url_media' => 'https://www.google.com/imgres?q=dede%20inoen&imgurl=https%3A%2F%2Fassets.pikiran-rakyat.com%2Fcrop%2F0x0%3A0x0%2F1200x675%2Fphoto%2F2024%2F02%2F04%2F777585708.png&imgrefurl=https%3A%2F%2Fmapaybandung.pikiran-rakyat.com%2Fshowbiz%2Fpr-1477677693%2Fhueeks-dede-inoen-nekat-santap-kotoran-harimau-ternyata-begini-rasanya%3Fpage%3Dall&docid=Z93moyB4G6u7rM&tbnid=hozdM4Z7B2XboM&vet=12ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECFsQAA..i&w=1200&h=675&hcb=2&ved=2ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECFsQAA',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'Judul',
            'url_media' => 'https://www.google.com/imgres?q=dede%20inoen&imgurl=https%3A%2F%2Fasset-2.tstatic.net%2Fwartakota%2Ffoto%2Fbank%2Fimages%2Fdede-inoen-saat-mengolah-tokek-menjadi-makanan.jpg&imgrefurl=https%3A%2F%2Fwartakota.tribunnews.com%2F2020%2F09%2F29%2Fyoutuber-dede-inoen-makan-tokek-goreng-ternyata-rasanya-seperti-ini%3Fpage%3D1&docid=HdME-OADIAjYIM&tbnid=wb8VQeLgummNdM&vet=12ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECDwQAA..i&w=700&h=393&hcb=2&ved=2ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECDwQAA',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => '',
            'url_media' => 'https://www.youtube.com/watch?v=rADUhejV4KY&pp=ygUKZGVkZSBpbm9lbg%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Foto Dede Inoen',
            'url_media' => 'https://www.google.com/imgres?q=dede%20inoen&imgurl=https%3A%2F%2Fawsimages.detik.net.id%2Fcommunity%2Fmedia%2Fvisual%2F2022%2F03%2F07%2Fkonten-dede-inoen-1_169.jpeg%3Fw%3D1200&imgrefurl=https%3A%2F%2Fwww.detik.com%2Fjabar%2Fberita%2Fd-6586714%2Fdede-inoen-dari-presenter-jadi-youtuber-nyentrik-yang-kontroversial&docid=nSiK3rcUDjGv0M&tbnid=6qI0ho8GxPuU2M&vet=12ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECBwQAA..i&w=1200&h=675&hcb=2&ved=2ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECBwQAA',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Foto Dede Inoen',
            'url_media' => 'https://www.google.com/imgres?q=dede%20inoen&imgurl=https%3A%2F%2Fasset-2.tstatic.net%2Fbelitung%2Ffoto%2Fbank%2Fimages%2F2601-Dede-Inoen-2.jpg&imgrefurl=https%3A%2F%2Fbelitung.tribunnews.com%2F2024%2F01%2F26%2Finilah-deretan-aksi-dede-inoen-yang-selalu-bikin-kontroversi&docid=WyWc0dgAaSh33M&tbnid=fsPr9WMwIW7WaM&vet=12ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECGQQAA..i&w=700&h=393&hcb=2&ved=2ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECGQQAA' ,
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Foto Dede Inoen',
            'url_media' => 'https://www.google.com/imgres?q=dede%20inoen&imgurl=https%3A%2F%2Fawsimages.detik.net.id%2Fcommunity%2Fmedia%2Fvisual%2F2022%2F03%2F21%2Fyoutuber-dede-inoen-ngumpet-di-kolong-rel-kereta_169.jpeg%3Fw%3D1200&imgrefurl=https%3A%2F%2Fnews.detik.com%2Fberita%2Fd-5993591%2Fdede-inoen-bikin-konten-ngumpet-di-kolong-rel-kai-bicara-ancaman-pidana&docid=86vLHJjGdbTUxM&tbnid=mxWegQiEELkcqM&vet=12ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECFwQAA..i&w=1200&h=677&hcb=2&ved=2ahUKEwil6I_upu6FAxXJ7TgGHaY2BVYQM3oECFwQAA',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => '',
            'url_media' => 'https://www.youtube.com/watch?v=8vDXrQolJUc&pp=ygUKZGVkZSBpbm9lbg%3D%3D',
        ]);
    }
}