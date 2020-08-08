<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailpenyelidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailpenyelidikans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('penyelidikan_id');
            $table->unsignedBigInteger('pegawai_id');
            $table->timestamps();
            $table->foreign('penyelidikan_id')->references('id')->on('perintah_penyelidikans')->onDelete('cascade');
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
        Schema::dropIfExists('detailpenyelidikans');
    }
}
