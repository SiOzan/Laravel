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
        Schema::create('detail_films', function (Blueprint $table) {
            $table->id();
            $table->foreign('film_id')->constrained()->oneDelete('cascadey')->unique();
            $table->boolean('media_type')->default(0);
            $table->string('media_title')->default('0');
            $table->string('url_media')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_films');
    }
};