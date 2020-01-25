@extends('layouts.app')

@section('titulo')
Séries - InfoFlix
@endsection

@php
$series=App\Serie::where('tipo', 'serie')
->orderBy('titulo', 'asc')
->get();
@endphp

@section('content')
<div class="container conteudo-2">
    <h1 id="nome_responsivo2" class="text-center mb-4">Séries</h1>
    <div class="row">
        @foreach ($series as $serie)
        <div id="image-series" class="col-md-2">
            <a class="text-white" href="{{ url('/series', ['id'=>$serie->id])}}">
                <div class="card bg-transparent border-0">
                    <div class="img-hover-zoom img-anime">
                        <img src="{{$serie->imagem}}" class="card-img-top" alt="...">
                    </div>

                    <div class="card-body">
                        <h6 id="nome_responsivo" class="card-title">{{$serie->titulo}}</h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
