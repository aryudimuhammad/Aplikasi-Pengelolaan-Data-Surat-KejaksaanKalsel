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
            $table->string('nomor');
            $table->string('nama_pelapor');
            $table->string('tempat_lahir');
            $table->enum('agama', ['1', '2', '3', '4', '5', '6']);
            $table->string('kewarganegaraan');
            $table->string('pekerjaan');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('kontak');
            $table->text('uraian');
            $table->tinyInteger('status');
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
