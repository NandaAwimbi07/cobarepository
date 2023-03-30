<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiMhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi_mhs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_prestasi', 100);
            $table->string('foto_prestasi', 50);
            $table->string('peraih_prestasi');
            $table->date('tahun_prestasi');
            $table->string('desc_prestasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasi_mhs');
    }
}
