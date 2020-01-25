@extends('layouts.app')

@section('titulo')
Favoritos - InfoFlix
@endsection

@section('content')
@php
/*
$favoritos_do_usuario=App\Favoritos::where('id_usuario', Auth::user()->id)
            ->orderBy('id', 'desc')
            ->get();
            */

            $favoritos_do_usuario=App\Favoritos::join('users','users.id', '=', 'favorita.id_usuario')
            ->join('Serie', 'serie.id', '=', 'favorita.id_serie')
            ->where('users.id', Auth::user()->id)
            ->orderBy('favorita.id', 'desc')
            ->get();
            $count=count($favoritos_do_usuario);

@endphp
<div class="container conteudo-2">
        <h1 id="nome_responsivo2" class="text-center mb-4">Meus Favoritos</h1>
        <div class="row">
            @foreach ($favoritos_do_usuario as $row)
            @php
               // $favoritos=App\Serie::where('id', $row->id_serie)
               // ->first();
            @endphp
            <div class="col-md-2">
                <a class="text-white" href="{{ url('/animes', ['id'=>$row->id])}}">
                    <div class="card bg-transparent border-0">
                        <div class="img-hover-zoom img-anime">
                            <img src="{{$row->imagem}}" class="card-img-top" alt="...">
                        </div>

                        <div class="card-body">
                            <h6 id="nome_responsivo" class="card-title">{{$row->titulo}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @if ($count==0)
        <h1 class="text-center" style="margin-top: 10rem;">Você ainda não favoritou nenhuma série :(</h1>
        @endif
    </div>
@endsection
