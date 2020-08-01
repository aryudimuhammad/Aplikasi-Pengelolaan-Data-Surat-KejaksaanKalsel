<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerintahPenyelidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perintah_penyelidikans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->unsignedBigInteger('surat_terima_id');
            $table->unsignedBigInteger('pegawai_id');
            $table->string('no_penyelidikan');
            $table->string('pertimbangan');
            $table->text('dasar');
            $table->text('untuk');
            $table->string('dikeluarkan_di');
            $table->timestamps();
            $table->foreign('surat_terima_id')->references('id')->on('surat_terimas')->onDelete('cascade');
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
        Schema::dropIfExists('perintah_penyelidikans');
    }
}
