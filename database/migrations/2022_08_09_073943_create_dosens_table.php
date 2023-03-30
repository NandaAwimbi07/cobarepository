<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_dosen', 50);
            $table->string('foto_dosen', 50)->nullable();
            $table->string('gender_dosen', 10);
            $table->string('nip_nik_dosen', 20)->nullable();
            $table->string('nidn_dosen', 10)->nullable();
            $table->string('jabatan_dosen', 50);
            $table->string('email_dosen', 50)->nullable();
            $table->string('notelp_dosen', 12);
            $table->string('alamat_dosen', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosens');
    }
}
