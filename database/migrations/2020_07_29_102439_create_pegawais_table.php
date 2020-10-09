<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('jabatan_id');
            $table->unsignedBigInteger('pangkat_id');
            $table->string('nama');
            $table->string('nrp');
            $table->string('telp');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jk',  ['1', '2']);
            $table->string('alamat');
            $table->timestamps();
            $table->foreign('jabatan_id')->references('id')->on('jabatans');
            $table->foreign('pangkat_id')->references('id')->on('pangkats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
}
