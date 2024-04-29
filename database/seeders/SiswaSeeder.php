<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert(
            [
                'nama' => 'Paujan Hikmah Rohman',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Rancamanyar'
            ]
        );
        Siswa::insert(
            [
                'nama' => 'Ambatukan Vertika',
                'kelas' => 'XI RPL 8',
                'jenis_kelamin' => 1,
                'alamat' => 'Leuwi Panjang',
            ]
        );
        Siswa::insert(
            [
                'nama' => 'Brando Steel',
                'kelas' => 'XI RPL 5',
                'jenis_kelamin' => 0,
                'alamat' => 'Cibaduyut',
            ]
        );
    }
}
