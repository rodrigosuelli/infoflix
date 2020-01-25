<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class AddItensToSeriePossuiGeneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('serie_possui_genero', function (Blueprint $table) {
            //
            DB::table('serie_possui_genero')->insert([
                [
                    'id_serie' => 1,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 1,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 1,
                    'id_genero' => 22
                    ],

                    [
                    'id_serie' => 1,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 1,
                    'id_genero' => 8
                    ],

                    [
                    'id_serie' => 2,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 2,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 3,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 3,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 3,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 4,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 4,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 4,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 4,
                    'id_genero' => 20
                    ],

                    [
                    'id_serie' => 5,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 5,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 5,
                    'id_genero' => 5
                    ],

                    [
                    'id_serie' => 5,
                    'id_genero' => 17
                    ],

                    [
                    'id_serie' => 5,
                    'id_genero' => 20
                    ],

                    [
                    'id_serie' => 5,
                    'id_genero' => 21
                    ],

                    [
                    'id_serie' => 6,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 6,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 6,
                    'id_genero' => 13
                    ],

                    [
                    'id_serie' => 6,
                    'id_genero' => 18
                    ],

                    [
                    'id_serie' => 6,
                    'id_genero' => 21
                    ],

                    [
                    'id_serie' => 7,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 7,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 7,
                    'id_genero' => 18
                    ],

                    [
                    'id_serie' => 8,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 8,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 8,
                    'id_genero' => 11
                    ],

                    [
                    'id_serie' => 8,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 8,
                    'id_genero' => 22
                    ],

                    [
                    'id_serie' => 8,
                    'id_genero' => 20
                    ],

                    [
                    'id_serie' => 9,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 10,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 10,
                    'id_genero' => 9
                    ],

                    [
                    'id_serie' => 11,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 11,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 11,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 11,
                    'id_genero' => 18
                    ],

                    [
                    'id_serie' => 11,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 11,
                    'id_genero' => 21
                    ],

                    [
                    'id_serie' => 12,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 12,
                    'id_genero' => 9
                    ],

                    [
                    'id_serie' => 13,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 13,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 13,
                    'id_genero' => 5
                    ],

                    [
                    'id_serie' => 14,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 14,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 14,
                    'id_genero' => 7
                    ],

                    [
                    'id_serie' => 15,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 15,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 15,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 16,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 16,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 16,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 16,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 16,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 16,
                    'id_genero' => 18
                    ],

                    [
                    'id_serie' => 17,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 17,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 17,
                    'id_genero' => 9
                    ],

                    [
                    'id_serie' => 18,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 18,
                    'id_genero' => 11
                    ],

                    [
                    'id_serie' => 19,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 19,
                    'id_genero' => 18
                    ],

                    [
                    'id_serie' => 19,
                    'id_genero' => 20
                    ],

                    [
                    'id_serie' => 20,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 20,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 20,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 21,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 21,
                    'id_genero' => 13
                    ],

                    [
                    'id_serie' => 21,
                    'id_genero' => 11
                    ],

                    [
                    'id_serie' => 21,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 21,
                    'id_genero' => 8
                    ],

                    [
                    'id_serie' => 22,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 22,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 22,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 22,
                    'id_genero' => 20
                    ],

                    [
                    'id_serie' => 22,
                    'id_genero' => 18
                    ],

                    [
                    'id_serie' => 23,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 23,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 23,
                    'id_genero' => 5
                    ],

                    [
                    'id_serie' => 23,
                    'id_genero' => 8
                    ],

                    [
                    'id_serie' => 24,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 24,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 25,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 25,
                    'id_genero' => 5
                    ],

                    [
                    'id_serie' => 26,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 26,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 26,
                    'id_genero' => 7
                    ],

                    [
                    'id_serie' => 27,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 27,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 27,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 28,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 29,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 29,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 30,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 30,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 30,
                    'id_genero' => 10
                    ],

                    [
                    'id_serie' => 31,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 31,
                    'id_genero' => 9
                    ],

                    [
                    'id_serie' => 31,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 32,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 32,
                    'id_genero' => 10
                    ],

                    [
                    'id_serie' => 33,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 34,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 34,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 34,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 35,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 35,
                    'id_genero' => 9
                    ],

                    [
                    'id_serie' => 36,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 37,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 39,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 40,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 40,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 41,
                    'id_genero' => 9
                    ],

                    [
                    'id_serie' => 41,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 38,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 38,
                    'id_genero' => 10
                    ],

                    [
                    'id_serie' => 38,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 41,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 42,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 42,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 42,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 43,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 43,
                    'id_genero' => 8
                    ],

                    [
                    'id_serie' => 43,
                    'id_genero' => 20
                    ],

                    [
                    'id_serie' => 44,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 44,
                    'id_genero' => 13
                    ],

                    [
                    'id_serie' => 44,
                    'id_genero' => 8
                    ],

                    [
                    'id_serie' => 44,
                    'id_genero' => 17
                    ],

                    [
                    'id_serie' => 45,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 45,
                    'id_genero' => 2
                    ],

                    [
                    'id_serie' => 45,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 45,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 45,
                    'id_genero' => 8
                    ],

                    [
                    'id_serie' => 46,
                    'id_genero' => 1
                    ],

                    [
                    'id_serie' => 46,
                    'id_genero' => 15
                    ],

                    [
                    'id_serie' => 47,
                    'id_genero' => 3
                    ],

                    [
                    'id_serie' => 47,
                    'id_genero' => 13
                    ],

                    [
                    'id_serie' => 47,
                    'id_genero' => 8
                    ],

                    [
                    'id_serie' => 48,
                    'id_genero' => 12
                    ],

                    [
                    'id_serie' => 48,
                    'id_genero' => 13
                    ],

                    [
                    'id_serie' => 48,
                    'id_genero' => 19
                    ]
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
        Schema::table('serie_possui_genero', function (Blueprint $table) {
            //
        });
    }
}
