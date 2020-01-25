<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 200);
            $table->unsignedTinyInteger('nota');
            $table->string('imagem', 3000);
            $table->string('wallpaper', 3000)->nullable();
            $table->text('sinopse');
            $table->string('trailer', 100);
            $table->char('tipo', 5);
            $table->char('ano_lancamento', 4)->nullable();
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
        Schema::dropIfExists('serie');
    }
}
