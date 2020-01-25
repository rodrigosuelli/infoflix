<?php
$series_wallpaper=App\Serie::whereNotNull('wallpaper')
->get();
?>

@extends('layouts.app')

@section('css')
<!--Owl Carousel-->
<link href="{{ asset('css/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
{{--Semantic UI Star Rating--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/rating.min.css">

@endsection

@section('titulo')
InfoFlix
@endsection

@section('content')
<div class="container conteudo-2">
    <div class="owl-one owl-carousel owl-theme">
        @foreach ($series_wallpaper as $serie_wallpaper)
        @php
        $generos_da_serie=App\Serie_possui_Genero::where('id_serie', $serie_wallpaper->id)
        ->get();
        @endphp
        <div class="row justify-content-center item">
            <div class="col-lg-6">
                <a href="{{ url('/series', ['id'=>$serie_wallpaper->id])}}">
                    <div class="img-hover-zoom img-anime">
                        <img src="{{$serie_wallpaper->wallpaper}}" alt="carousel">
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a style="color:white; text-decoration:none;" href="{{ url('/series', ['id'=>$serie_wallpaper->id])}}">
                    <h2 id="titulo_responsivo">{{$serie_wallpaper->titulo}}</h2>
                </a>
                <div class="col-sm-12">
                    <h4 id="nota-anime" class="float-left">{{$serie_wallpaper->nota}}.0</h4>
                    <div id="estrelas-anime" class="ui huge star rating ml-2" data-rating="{{$serie_wallpaper->nota}}" data-max-rating="10">
                    </div>
                </div>
                <nav id="generos-anime" class="navbar navbar-expand-sm navbar-dark"
                    style="top: -10px;;right:50px; background-color: #00000000;">
                    <ul class="navbar-nav">
                        @foreach ($generos_da_serie as $genero)
                        @php
                        $pegar_generos=App\Genero::where('id', $genero->id_genero)
                        ->orderBy('nome', 'asc')
                        ->first();
                        @endphp
                        <li class="nav-item mr-1">
                            <a class="nav-link" href="{{ url('/generos', ['id'=>$pegar_generos->id]) }}">
                                {{$pegar_generos->nome}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
                <div style="height:150px; text-overflow:ellipsis;">
                    <p id="sinopse-anime" class="sinopse" style="top:-20px;">{{$serie_wallpaper->sinopse}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @php
    $ultimos_animes=App\Serie::where('tipo','anime')
    ->orderBy('id','desc')->get();
    @endphp
    <h4 style="font-size: 1.2rem;" class="mb-3">Animes Recentes</h4>
    {{--<div class="row">
        @foreach ($ultimas_series as $ultima_serie)
        <div class="col-sm-2">
            <div class="card bg-transparent border-0">
                <img src="{{$ultima_serie->imagem}}" class="card-img-top img-anime" alt="...">
    <div class="card-body">
        <h6 class="card-title">{{$ultima_serie->titulo}}</h6>
    </div>
</div>
</div>
@endforeach
</div>--}}
<div class="owl-two owl-carousel">
    @foreach ($ultimos_animes as $ultimo_anime)
    <a style="color:white; " href="{{ url('/series', ['id'=>$ultimo_anime->id])}}">
        <div class="item card bg-transparent border-0">
            <div class="img-hover-zoom img-anime">
                <img src="{{$ultimo_anime->imagem}}" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h6 class="card-title">{{$ultimo_anime->titulo}}</h6>
            </div>
        </div>
    </a>
    @endforeach
</div>

@php
    $ultimas_series=App\Serie::where('tipo', 'serie')
    ->orderBy('id','desc')->get();
    @endphp
<h4 style="font-size: 1.2rem;" class="mb-3">Séries Recentes</h4>
<div class="owl-two owl-carousel">
        @foreach ($ultimas_series as $ultima_serie)
        <a style="color:white;" href="{{ url('/series', ['id'=>$ultima_serie->id])}}">
            <div class="item card bg-transparent border-0">
                <div class="img-hover-zoom img-anime">
                    <img src="{{$ultima_serie->imagem}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h6 class="card-title">{{$ultima_serie->titulo}}</h6>
                </div>
            </div>
        </a>
        @endforeach
    </div>

</div>
@endsection

@section('script')
<script src="{{ asset('css/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/rating.min.js"></script>
<script>
    $(document).ready(function () {
        $('.owl-one').owlCarousel({
            autoplay: true,
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            margin: 30,
            loop: true,
            items: 1,
            singleItem: true
        });
        $('.owl-two').owlCarousel({
            dots:false,
            margin: 30,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });
    });
    $('.ui.rating')
        .rating();

</script>
@endsection
