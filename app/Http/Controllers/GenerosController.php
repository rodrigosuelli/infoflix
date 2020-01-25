<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerosController extends Controller
{
    //
    public function show($id){
        //Mostra a pagina da serie/anime
        return view('generos', ['id'=>$id]);
    }
}
