<?php

use Illuminate\Support\Facades\Route;
use App\Models\Siswa;
use App\Models\Album_Musik;
use App\Models\Film;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

//route basic
Route::get('/2', function () {
    return view('animals');
});

Route::get('/3', function () {
    return view('fruits');
});

Route::get('/about', function () {
    $nama = "Paujan";
    $jk = "Laki-laki";
    $pt = "SMK";
    $pekerjaan = "Nganggur Berpenghasilan";

    return view('biodata', compact('nama', 'jk', 'pt', 'pekerjaan'));
});

Route::get('/sample/{nama}', function (Request $request, $nama) {
    $nama2 = $nama;

    return view('sample', compact('nama2'));
});

Route::get('siswa', function() {
    return view('siswa');
    // return Siswa::all();
});

Route::get('album', function() {
    return view('album');
});

Route::get('film', function() {
    return view('film');
});