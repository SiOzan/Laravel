<?php

use App\Models\Film;
use Illuminate\Support\Facades\Route;

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

Route::get('siswa', function () {
    return view('siswa');
    // return Siswa::all();
});

Route::get('album', function () {
    return view('album');
});

Route::get('film', function () {
    return view('film');
});

Route::get('film/{id}', function (int $id) {
    return view('detail-film', ['film' => Film::findOrFail($id)]);
});

Route::get('perkenalan', [App\Http\Controllers\MyController::class, 'introduce']);

Route::get('hewan', [App\Http\Controllers\MyController::class, 'animals']);

Route::get('movie', [App\Http\Controllers\MovieController::class, 'getMovie']);
Route::get('movie/{id}', [App\Http\Controllers\MovieController::class, 'getMovieById']);
Route::get('artikel', [App\Http\Controllers\ArtikelController::class, 'getArtikel']);
Route::get('artikel/{id}', [App\Http\Controllers\ArtikelController::class, 'getArtikelById']);
Route::get('artikel/kategori/{kategori}', [App\Http\Controllers\ArtikelController::class, 'getArtikelByKategori']);
