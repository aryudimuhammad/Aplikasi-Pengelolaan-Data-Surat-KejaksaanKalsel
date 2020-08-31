<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailputusanpengadilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailputusanpengadilans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('putusan_pengadilan_id');
            $table->unsignedBigInteger('pegawai_id');
            $table->timestamps();
            $table->foreign('putusan_pengadilan_id')->references('id')->on('putusan_pengadilans')->onDelete('cascade');
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
        Schema::dropIfExists('detailputusanpengadilans');
    }
}
