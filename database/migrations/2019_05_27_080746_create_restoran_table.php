<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestoranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restoran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_wilayah')->unsigned();
            $table->string('gambar_restoran');
            $table->string('nama_restoran');
            $table->string('deskripsi_restoran');
            $table->string('alamat_restoran');
            $table->timestamps();

            $table->foreign('id_wilayah')
            ->references('id')
            ->on('wilayah')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restoran');
    }
}
