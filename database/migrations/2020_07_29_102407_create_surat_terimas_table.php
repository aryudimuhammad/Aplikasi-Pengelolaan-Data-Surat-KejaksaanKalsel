<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTerimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_terimas', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->string('nama_pelapor');
            $table->string('tempat_lahir');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('kontak');
            $table->string('uraian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_terimas');
    }
}
