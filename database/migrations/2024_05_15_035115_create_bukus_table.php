<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->unique();
            $table->text('isbn');
            $table->text('deskripsi');
            $table->integer('jml_hal');
            $table->string('cover');
            $table->date('tgl_terbit');
            $table->foreignId('id_penulis')->onDelete('cascade');
            $table->timestamps();
        });

        // membuat tabel pivot (tabel bantu) 'genre_buku'
        Schema::create('genre_buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_buku')->onDelete('cascade');
            $table->foreignId('id_genre')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukus');
        Schema::dropIfExists('genre_buku');
    }
};
