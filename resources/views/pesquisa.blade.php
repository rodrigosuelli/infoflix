@extends('layouts.app')

@section('titulo')
{{$query}} - InfoFlix
@endsection

@php
$series=App\Serie::where('titulo', 'like', '%'.$query.'%')
->orderBy('titulo', 'asc')
->get();
$count=count($series);
@endphp

@section('content')
<div class="container conteudo-2">
<h1 id="nome_responsivo2" class="text-center mb-4">Pesquisa: {{$query}}</h1>
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
@if ($count <= 0)
    <h2 class="text-center" style="margin-bottom: 10rem; margin-top:10rem;">Sem resultados para essa pesquisa</h2>
    @endif
@endsection
