@php
$generos=App\Genero::orderBy('nome', 'asc')
->get();

$max_id=App\Serie::max('id');

$last_serie=App\Serie::where('id', $max_id)
->first();
@endphp

@extends('layouts.app')

@section('titulo')
InfoFlix - Atribuir Gênero
@endsection

<!--Code-->
@section('content')
<div class="container conteudo">
    <div class="row">
        <div class="col-md-3">
        <img style="max-width:88%" class="img-fluid" src="{{$last_serie->imagem}}" alt="imagem_anime">
        </div>
        <div class="col-md-9">
            <h3 id="titulo_responsivo">Clique para escolher o(s) gênero(s) de {{$last_serie->titulo}}:</h3>
                @foreach ($generos as $genero)
                @php
                $generos_da_serie=App\Serie_possui_Genero::where('id_serie', $max_id)
                ->where('id_genero', $genero->id)
                ->first();
                @endphp
                @if (isset($generos_da_serie))
                <a href="{{ url('/adicionar/genero', ['id'=>$genero->id])}}"><button type="button" class="btn btn-success mt-2">{{$genero->nome}}</button></a>
                @else
                <a href="{{ url('/adicionar/genero', ['id'=>$genero->id])}}"><button type="button" class="btn btn-secondary mt-2">{{$genero->nome}}</button></a>
                @endif
                @endforeach
        </div>
    </div>
    <div class="row justify-content-center">
<a onclick="alert('Série adicionada com sucesso!')" href="{{ url('/adicionar') }}"><button class="btn btn-block btn-dark btn-lg mt-4 add">Finalizar</button></a>
</div>
</div>
@endsection
