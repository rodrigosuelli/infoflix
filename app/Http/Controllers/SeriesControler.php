<?php

namespace App\Http\Controllers;

use App\Genero;
use Illuminate\Http\Request;
use App\Serie;
use App\Serie_possui_Genero;
use Illuminate\Support\Facades\Input;

class SeriesControler extends Controller
{
    //
    public function create(){
        //Mostra a pagina para adicioanr séries
        return view('series.adicionar');
    }

    public function show($id){
        //Mostra a pagina da serie/anime
        return view('series.mostrar', ['id'=>$id]);

    }

    public function store(Request $request){
        // Adiciona uma série ao banco de dados
        $serie = new Serie();

        $serie->titulo = $request->titulo;
        $serie->nota = $request->nota;
        $serie->imagem = $request->imagem;
        $serie->sinopse = $request->sinopse;
        $serie->trailer = $request->trailer;
        $serie->tipo = $request->tipo;
        $serie->wallpaper = $request->wallpaper;
        $serie->ano_lancamento = $request->ano_lancamento;


        $serie->save();
        return redirect('/adicionar/genero');
    }

    public function pesquisar(Request $request){
        $query = $request->input('query');
        return view('pesquisa', ['query'=>$query]);
    }
}
