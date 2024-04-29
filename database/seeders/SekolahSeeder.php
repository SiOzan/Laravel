<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sekolah;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sekolah::insert(
            [
                'nama' => 'SMK Amal Bakti Bandung',
                'alamat' => 'Alamat : Jl. AH Nasution Gg Swadaya No. 34, Cipadung, Cibiru, Kota Bandung 40614',
                'email' => 'smkamalbaktikotabandung@gmail.com.',
                'tlp' => '022-7816162',
                'status' => 'Active',
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK Bakti Mandiri Bandung',
                'alamat' => 'Alamat : Jl. Ciumbuleuit Atas No.48, Ciumbuleuit, Cidadap, Kota Bandung 40142',
                'email' => 'Baktimandirismk@yahoo.co.id',
                'tlp' => '022-081861853',
                'status' => 'Active'
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK Bhakti Kencana Bandung',
                'alamat' => 'Alamat : Jl. Sindangsari No. 100 Ujung Berung, Cipadung Kulon, Panyileukan, Kota Bandung 40611',
                'email' => 'admin@smkbkbdg.sch.id',
                'tlp' => '022-70731914',
                'status' => 'Active'
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK Bina Sarana Cendekia Bandung',
                'alamat' => 'Alamat : Jl. PPH. Mustofa No.25, Neglasari, Cibeunying Kaler, Kota Bandung 40124',
                'email' => 'Smkbinasaranacendekia@gmail.com',
                'tlp' => '081322555401',
                'status' => 'Active'
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK BPI Bandung',
                'alamat' => 'Alamat : Jl. Burangrang No.8, Lengkong,  Kota Bandung Bandung 40262',
                'email' => 'www.smkbpi.sch.id',
                'tlp' => '022-7301739',
                'status' => 'Active'
            ]
        );
        Sekolah::insert(
            [
                'nama' => '	SMK PUTRA NASIONAL',
                'alamat' => 'JL. BABAKAN TAROGONG NO. 119 E',
                'email' => 'smkpunas@gmail.com',
                'tlp' => '00000000000000000000',
                'status' => 'Active'
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK BPP Bandung',
                'alamat' => 'Alamat : Jl. Van Deventer No.14 Kebon Pisang, Sumur  Bandung,  Kota Bandung 40112',
                'email' => 'Smkbppbandung@gmail.com',
                'tlp' => '022-4201674',
                'status' => 'Active'
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK Budaya Bangsa Bandung',
                'alamat' => 'Alamat : Jl. Citarip Raya Barat No.16, Kopo, Bojongloa Kaler, Kota Bandung 40233',
                'email' => 'Smk.budayabangsa@yahoo.com',
                'tlp' => '022-6029414',
                'status' => 'Active'
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK Budhi Cendekia Bandung',
                'alamat' => 'Alamat : Jl. Raya Cilember Gg. Buni Sugih, Sukaraja, Cicendo, Kota Bandung 40175',
                'email' => 'Budhicendekia@gmail.com',
                'tlp' => '022-61616386',
                'status' => 'Active'
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK Cipta Skill Bandung',
                'alamat' => 'Alamat : Jl. Cikruta Baru Raya No.28, Negla Sari, Cibeunying Kaler, Kota Bandung 40124',
                'email' => 'Smkciptaskill@ymail.com',
                'tlp' => '022-71177364',
                'status' => 'Active'
            ]
        );
    }
}
