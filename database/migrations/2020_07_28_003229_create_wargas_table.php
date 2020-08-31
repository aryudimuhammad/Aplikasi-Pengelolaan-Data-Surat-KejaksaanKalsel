<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->length(36);
            $table->string('nik');
            $table->string('nama_warga');
            $table->string('alias');
            $table->enum('status',['1','2','3','4']);
            $table->enum('jenis_kelamin' , ['1','2']);
            $table->enum('agama', ['1', '2', '3', '4', '5', '6']);
            $table->string('tempat_lahir');
            $table->string('kewarganegaraan');
            $table->string('ortu');
            $table->string('pekerjaan');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('kontak');
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
        Schema::dropIfExists('wargas');
    }
}
