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
            $table->unsignedBigInteger('warga_id');
            $table->unsignedBigInteger('pegawai_id');
            $table->string('no_panggilan');
            $table->string('kota');
            $table->date('tgl_dipanggil');
            $table->time('jam');
            $table->string('tempat');
            $table->text('keterangan');
            $table->timestamps();
            $table->foreign('perintah_penyidikan_id')->references('id')->on('perintah_penyidikans')->onDelete('cascade');
            $table->foreign('warga_id')->references('id')->on('wargas')->onDelete('cascade');
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onDelete('restrict');
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
