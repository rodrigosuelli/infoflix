<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddGenerosToGeneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('genero', function (Blueprint $table) {
            //
            DB::table('genero')->insert([
                ['nome' => 'Ação'],
                ['nome' => 'Aventura'],
                ['nome' => 'Comédia'],
                ['nome' => 'Comédia Romântica'],
                ['nome' => 'Ficção Científica'],
                ['nome' => 'Musical'],
                ['nome' => 'Policial'],
                ['nome' => 'Romance'],
                ['nome' => 'Suspense'],
                ['nome' => 'Terror'],
                ['nome' => 'Ecchi'],
                ['nome' => 'Drama'],
                ['nome' => 'Escolar'],
                ['nome' => 'Esporte'],
                ['nome' => 'Fantasia'],
                ['nome' => 'Harém'],
                ['nome' => 'Seinen'],
                ['nome' => 'Shounen'],
                ['nome' => 'Slice of Life'],
                ['nome' => 'Sobrenatural'],
                ['nome' => 'Superpoderes'],
                ['nome' => 'Jogo']
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('genero', function (Blueprint $table) {
            //
        });
    }
}
