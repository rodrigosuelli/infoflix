@extends('layouts.app')

@section('titulo')
Testes - InfoFlix
@endsection

@php
$series=App\Serie_possui_Genero::orderBy('id', 'asc')
->get();
@endphp

@section('content')
<div class="container conteudo-2">

    @foreach ($series as $serie)
    <h6>[</h6>
    <h6>'id_serie' => {{$serie->id_serie}},</h6>
    <h6>'id_genero' => {{$serie->id_genero}}</h6>
    <h6>],</h6>
    <br>
    @endforeach

</div>
@endsection
