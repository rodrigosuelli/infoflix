<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriePossuiGeneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serie_possui_genero', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_serie');
            $table->unsignedInteger('id_genero');
            $table->foreign('id_serie')->references('id')->on('serie');
            $table->foreign('id_genero')->references('id')->on('genero');
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
        Schema::dropIfExists('serie_possui_genero');
    }
}
