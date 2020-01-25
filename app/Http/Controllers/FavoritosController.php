<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favoritos;
use App\Serie;
use App\User;
//use Auth;
use Illuminate\Support\Facades\Auth;

class FavoritosController extends Controller
{
    //
    public function store($id_serie){
        $id_usuario=Auth::user()->id;
        $favorito=Favoritos::where('id_serie', $id_serie)
            ->where('id_usuario', $id_usuario)
            ->first();

        if (!isset($favorito)){
            $add_favorito = new Favoritos();
        $add_favorito->id_serie = $id_serie;
        $add_favorito->id_usuario = $id_usuario;
        $add_favorito->save();
        }else{
            $deletarFavorito = Favoritos::where('id_serie', $id_serie)
            ->where('id_usuario', $id_usuario)
            ->delete();
        }

        return redirect()->route('serie', ['id' => $id_serie]);
    }
}
