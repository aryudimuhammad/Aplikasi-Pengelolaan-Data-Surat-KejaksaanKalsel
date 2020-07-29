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
            $table->integer('no_penyelidikan');
            $table->string('pertimbangan');
            $table->string('dasar');
            $table->string('untuk');
            $table->string('dikeluarkan_di');
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
        Schema::dropIfExists('perintah_penyelidikans');
    }
}
