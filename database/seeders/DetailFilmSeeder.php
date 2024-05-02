<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailFilm;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailFilm::insert([
            'film_id' => 1,
            'code_film' => 'tt2788316',
            'url_imdb' => 'https://www.imdb.com/title/tt2788316/?ref_=hm_fanfav_tt_i_3_pd_fp1_r',
        ]);
        DetailFilm::insert([
            'film_id' => 2,
            'code_film' => 'tt13649112',
            'url_imdb' => 'https://www.imdb.com/title/tt13649112/?ref_=hm_top_tt_i_2',
        ]);
        DetailFilm::insert([
            'film_id' => 3,
            'code_film' => 'tt0773262',
            'url_imdb' => 'https://www.imdb.com/title/tt0773262/?ref_=hm_stp_pvs_piv_tt_i_2',
        ]);
    }
}