@extends('layouts.app')

@section('titulo')
Animes - InfoFlix
@endsection

@php
$animes=App\Serie::where('tipo', 'anime')
->orderBy('titulo', 'asc')
->get();
@endphp

@section('content')
<div class="container conteudo-2">
    <h1 id="nome_responsivo2" class="text-center mb-4">Animes</h1>
    <div class="row">
        @foreach ($animes as $anime)
        <div id="image-series" class="col-md-2">
            <a class="text-white" href="{{ url('/animes', ['id'=>$anime->id])}}">
                <div class="card bg-transparent border-0">
                    <div class="img-hover-zoom img-anime">
                        <img src="{{$anime->imagem}}" class="card-img-top" alt="...">
                    </div>

                    <div class="card-body">
                        <h6 id="nome_responsivo" class="card-title">{{$anime->titulo}}</h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
