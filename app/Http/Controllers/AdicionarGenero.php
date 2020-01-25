<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genero;
use App\Serie;
use App\Serie_possui_Genero;
use Illuminate\Support\Facades\DB;

class AdicionarGenero extends Controller
{
    //
    public function create(){
        return view('series.add_genero');
    }

    public function store($id){
        $max_id=Serie::max('id');
        $generos_da_serie=Serie_possui_Genero::where('id_serie', $max_id)
                ->where('id_genero', $id)
                ->first();

        $last_serie=Serie::where('id', $max_id)
        ->first();


        if (!isset($generos_da_serie)){
            $generos_serie = new Serie_possui_Genero();
        $generos_serie->id_serie = $last_serie->id;
        $generos_serie->id_genero = $id;
        $generos_serie->save();

        }else{
            $deletarGenero = Serie_possui_Genero::where('id_serie', $max_id)
            ->where('id_genero', $id)
            ->delete();
        }
        return redirect('/adicionar/genero');
    }
}
