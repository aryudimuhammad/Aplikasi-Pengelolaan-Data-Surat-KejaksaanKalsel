<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailpenyidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailpenyidikans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('perintah_penyidikan_id');
            $table->unsignedBigInteger('pegawai_id');
            $table->timestamps();
            $table->foreign('perintah_penyidikan_id')->references('id')->on('perintah_penyidikans')->onDelete('cascade');
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
        Schema::dropIfExists('detailpenyidikans');
    }
}
