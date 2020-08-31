<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanKeterangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_keterangans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('perintah_penyelidikan_id');
            $table->unsignedBigInteger('warga_id');
            $table->string('no_pol');
            $table->string('perihal');
            $table->string('di_kota');
            $table->text('uraian');
            $table->timestamps();
            $table->foreign('perintah_penyelidikan_id')->references('id')->on('perintah_penyelidikans')->onDelete('cascade');
            $table->foreign('warga_id')->references('id')->on('wargas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permintaan_keterangans');
    }
}
