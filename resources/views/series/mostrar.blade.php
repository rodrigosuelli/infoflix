@php
$serie=App\Serie::where('id', $id)
->first();

$generos_da_serie=App\Serie_possui_Genero::where('id_serie', $serie->id)
->get();

@endphp

@extends('layouts.app')

@section('css')
{{--Semantic UI Star Rating--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/rating.min.css">
@endsection

@section('titulo')
{{$serie->titulo}} - InfoFlix
@endsection

@section('content')
<div class="container conteudo">
    <div class="row">
        <div class="col-md-3">
            <div id="sombra_responsiva" class="img-hover-zoom img-anime" @if ($serie->tipo=="serie")
                style="max-width:85%;"
                @else
                style="max-width:92%;"
            @endif >
                <img class="img-fluid" src="{{$serie->imagem}}" alt="imagem_anime">
            </div>
        </div>
        <div class="col-md-9">
            @guest

            <a title="Click para favoritar!" class="sem-decoracao" onclick="alert('Você deve fazer login para poder favoritar!')" href="#">
                <i class="big heart outline icon" style="position: relative;
            top: 43px;"></i>
            </a>

            @else
            @php
            $favoritas=App\Favoritos::where('id_serie', $serie->id)
            ->where('id_usuario', Auth::user()->id)
            ->first();
            @endphp

            @if (isset($favoritas))
            <a class="sem-decoracao"
                href="{{ url('/favoritar', ['id_serie'=>$serie->id])}}">
                <i title="Click para desfavoritar!" class="big heart icon" style="position: relative;
                top: 43px;"></i>
            </a>
            @else
            <a class="sem-decoracao"
                href="{{ url('/favoritar', ['id_serie'=>$serie->id])}}">
                <i title="Click para favoritar!" class="big heart outline icon" style="position: relative;
            top: 43px;"></i>
            </a>
            @endif
            @endguest

            <h2 class="titulo-serie">{{$serie->titulo}}</h2>
            <div id="estrelas-mostrar" class="row ml-1" style="position:relative;top:58px">
                <div class="col-sm-12">
                    <h4 id="nota-anime" class="float-left">{{$serie->nota}}.0</h4>
                    <div id="estrelas-mostrar" class="ui huge star rating ml-2" data-rating="{{$serie->nota}}" data-max-rating="10"></div>
                </div>
            </div>
            {{--Gêneros da série--}}
            <nav id="generos-mostrar" class="navbar navbar-expand-sm navbar-dark" style="top: 43px;
                    background-color: #00000000;">
                <ul class="navbar-nav">
                    @foreach ($generos_da_serie as $genero)
                    @php
                    $pegar_generos=App\Genero::where('id', $genero->id_genero)
                    ->orderBy('nome', 'asc')
                    ->first();
                    @endphp
                    <li class="nav-item mr-1">
                        <a class="nav-link"
                            href="{{ url('/generos', ['id'=>$pegar_generos->id]) }}">{{$pegar_generos->nome}}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>
            <p class="sinopse">{{$serie->sinopse}}</p>
        </div>
    </div>
    <h2 class="mt-5 mb-4 text-center">Opening/Trailer</h2>
    <iframe width="100%" height="624px" src="https://www.youtube.com/embed/{{$serie->trailer}}{{--?autoplay=1--}}"
        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/rating.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script>
    $('.ui.rating')
        .rating();

</script>
@endsection
