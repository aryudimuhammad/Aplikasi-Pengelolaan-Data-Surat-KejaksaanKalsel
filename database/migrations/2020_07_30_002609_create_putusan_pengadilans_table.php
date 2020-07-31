<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePutusanPengadilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('putusan_pengadilans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('hasil_penyidikan_id');
            $table->unsignedBigInteger('pegawai_id');
            $table->string('nomor');
            $table->text('dasar');
            $table->text('pertimbangan');
            $table->text('untuk');
            $table->string('dikeluarkan_di');
            $table->timestamps();
            $table->foreign('hasil_penyidikan_id')->references('id')->on('hasil_penyidikans')->onDelete('cascade');
            $table->foreign('pegawai_id')->references('id')->on('pegawais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('putusan_pengadilans');
    }
}
