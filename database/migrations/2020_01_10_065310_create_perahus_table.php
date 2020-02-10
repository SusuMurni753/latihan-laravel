<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerahusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perahus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_perahu')->default();
            $table->string('jenis_perahu')->default();
            $table->string('asal_perahu')->default();
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
        Schema::dropIfExists('perahus');
    }
}
