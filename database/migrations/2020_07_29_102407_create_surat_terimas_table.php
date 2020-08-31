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
            $table->unsignedBigInteger('warga_id');
            $table->unsignedBigInteger('aduan_id');
            $table->string('nomor');
            $table->text('uraian');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->foreign('warga_id')->references('id')->on('wargas')->onDelete('cascade');
            $table->foreign('aduan_id')->references('id')->on('aduans')->onDelete('restrict');
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
