@php
$genero=App\Genero::where('id', $id)
->first();
@endphp

@extends('layouts.app')

@section('titulo')
{{$genero->nome}} - Infoflix
@endsection


@php
/*$id_das_series=App\Serie_possui_Genero::where('id_genero', $id)
->get();*/
$consultas=DB::table('genero')
        ->join('serie_possui_genero', 'serie_possui_genero.id_genero', '=', 'genero.id')
        ->join('Serie', 'Serie.id', '=', 'Serie_possui_Genero.id_serie')
        ->where('genero.id', '=', $id)
        ->get();
        $count=count($consultas);
@endphp

@section('content')
@if ($count > 0)
<div class="container conteudo-2">
    <h1 id="nome_responsivo2" class="text-center mb-4">{{$genero->nome}}</h1>
    <div class="row">
        @foreach ($consultas as $consulta)
        <div id="image-series" class="col-md-2">
            <a class="text-white" href="{{ url('/series', ['id'=>$consulta->id])}}">
                <div class="card bg-transparent border-0">
                    <div class="img-hover-zoom img-anime">
                        <img src="{{$consulta->imagem}}" class="card-img-top" alt="...">
                    </div>

                    <div class="card-body">
                        <h6 id="nome_responsivo" class="card-title">{{$consulta->titulo}}</h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@else
    <h1 class="text-center" style="margin-bottom: 20rem;">Não Há Séries ou Animes desse Gênero </h1>
    @endif
@endsection
