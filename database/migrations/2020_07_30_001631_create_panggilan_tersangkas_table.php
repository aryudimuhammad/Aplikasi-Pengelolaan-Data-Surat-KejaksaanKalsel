<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanggilanTersangkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panggilan_tersangkas', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('perintah_penyidikan_id');
            $table->string('no_panggilan');
            $table->string('nama');
            $table->string('kota');
            $table->date('tgl_dipanggil');
            $table->time('jam');
            $table->string('tempat');
            $table->string('menghadap');
            $table->string('keterangan');
            $table->timestamps();
            $table->foreign('perintah_penyidikan_id')->references('id')->on('perintah_penyidikans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panggilan_tersangkas');
    }
}
