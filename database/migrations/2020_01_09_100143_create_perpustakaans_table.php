<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpustakaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpustakaans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_buku')->uniqid();
            $table->integer('jumlah_halaman')->default(50);
            $table->string('nama_peminjam')->default();
            $table->string('peminjam')->nullabe();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perpustakaans');
    }
}
