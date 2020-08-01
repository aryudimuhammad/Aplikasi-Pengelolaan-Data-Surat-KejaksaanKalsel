<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerintahPenyidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perintah_penyidikans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('hasil_penyelidikan_id');
            $table->unsignedBigInteger('pegawai_id');
            $table->string('no_penyidikan');
            $table->string('pertimbangan');
            $table->string('dasar');
            $table->string('untuk');
            $table->string('dikeluarkan_di');
            $table->timestamps();
            $table->foreign('hasil_penyelidikan_id')->references('id')->on('hasil_penyelidikans')->onDelete('cascade');
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
        Schema::dropIfExists('perintah_penyidikans');
    }
}
