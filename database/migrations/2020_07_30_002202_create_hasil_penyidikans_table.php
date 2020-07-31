<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPenyidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_penyidikans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('panggilan_tersangka_id');
            $table->string('nomor_surat');
            $table->string('klasifikasi');
            $table->string('perihal');
            $table->string('kepada');
            $table->string('dikeluarkan_di');
            $table->text('uraian');
            $table->timestamps();
            $table->foreign('panggilan_tersangka_id')->references('id')->on('panggilan_tersangkas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_penyidikans');
    }
}
