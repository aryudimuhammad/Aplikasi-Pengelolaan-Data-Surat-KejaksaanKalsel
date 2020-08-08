<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailpanggilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailpanggilans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('panggilan_id');
            $table->unsignedBigInteger('pegawai_id');
            $table->timestamps();
            $table->foreign('panggilan_id')->references('id')->on('panggilan_tersangkas')->onDelete('cascade');
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
        Schema::dropIfExists('detailpanggilans');
    }
}
