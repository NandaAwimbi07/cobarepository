<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_berita', 50);
            $table->string('judul_berita', 255);
            $table->string('foto_berita', 50);
            $table->string('penyelenggara_berita', 50);
            $table->string('desc_berita', 255);
            $table->date('tanggal_berita');
            $table->string('status_berita', 10);
            $table->foreign('kategori_berita')->references('id')->on('kategoris')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beritas');
    }
}
