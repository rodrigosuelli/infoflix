<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo')</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/meuestilo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">

    <!--Animate.css-->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">

    <!--Owl Carousel-->
    {{-- <link href="{{ asset('css/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet"> --}}

    @yield('css')
    {{-- Icon--}}
    <link rel="icon" href="https://www.imagemhost.com.br/images/2019/11/18/icone_infoflix.png">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand animated pulse" href="{{ url('/') }}">
                    <img id="logo" src="{{ asset('imagens/Infoflix[logo].png') }}" width="165" alt="logo">
                </a>
                <!-- Botão responsivo para celulares -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="{{ url('/animes') }}" class="nav-link">Animes</a></li>
                        <li class="nav-item"><a href="{{ url('/series') }}" class="nav-link">Séries</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gêneros
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="row">
                                    @php
                                    $generos=App\Genero::where('id', '<=', '11' ) ->orderBy('nome', 'asc')
                                        ->get();


                                        $generos2=App\Genero::where('id', '>', '11')
                                        ->orderBy('nome', 'asc')
                                        ->get();
                                        @endphp
                                        <div class="col-sm-6">
                                            @foreach ($generos as $genero)
                                            <a class="dropdown-item"
                                                href="{{ url('/generos', ['id'=>$genero->id]) }}">{{$genero->nome}}</a>
                                            @endforeach
                                        </div>
                                        <div class="col-sm-6">
                                            @foreach ($generos2 as $genero2)
                                            <a class="dropdown-item"
                                                href="{{ url('/generos', ['id'=>$genero2->id]) }}">{{$genero2->nome}}</a>
                                            @endforeach
                                        </div>
                                </div>


                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-2">
                        <form class="form-inline" action="/pesquisa" method="get">
                                @csrf
                                <div class="input-group ml-4">
                                    <input name="query" id="query" class="form-control border border-light pesquisar-borda border-right-0" type="search"
                                        placeholder="Pesquisar.." aria-label="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="bg-transparent border border-light border-left-0"><i id="icone-pesquisa" class="search icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Cadastrar</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{ url('/favoritos') }}" class="dropdown-item">Meus Favoritos</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div id="head">
            <div class="overlay-top"></div>
        </div>
        <main class="main py-4">
            @yield('content')
        </main>
        <footer id="footer" class="py-5 mt-3">
            <div class="overlay"></div>
            <div class="container text-white">
                <div class="row align-items-start">
                    <div id="ul-footer" class="col-3">
                        <h6>Links</h6>
                        <ul class="list-group">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/animes') }}">Animes</a></li>
                            <li><a href="{{ url('/series') }}">Séries</a></li>
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Cadastro</a></li>
                        </ul>
                    </div>
                    <div id="ul2-footer" class="col-3">
                        <h6>Alunos</h6>
                        <ul class="list-group">
                            <li>Rodrigo Suélli</li>
                            <li>Eusébio Leite</li>
                            <li>Lucas Tadeu</li>
                            <li>Gabriel Santim</li>
                            <li>José Murilo</li>
                            <li>Renan Bravo</li>
                            <li>Victor Bombarda</li>
                            <li>Jéssica Aparecida</li>
                            <li>Tifanny Gomes</li>
                            <li>Luiz Antônio</li>
                        </ul>
                    </div>
                    <div class="col-3 text-center">
                        <a class="navbar-brand animated pulse" href="{{ url('/') }}">
                            <img id="logo" style="margin-bottom: 15px;" src="{{ asset('imagens/Infoflix[logo].png') }}"
                                width="235px" alt="logo">
                        </a>
                        <h6 class="titulo-footer">Copyright © Info Flix 2019</h6><br>
                    </div>
                    <div class="footer-anime">
                        <img id="alice_sao" width="300px" height="auto" src="{{ asset('imagens/alice_sao.png')}}"
                            alt="Alice_SAO">
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @yield('script')
</body>
{{--Owl Carousel
<script src="css/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                margin: 0,
                loop: true,
                items: 1,
                singleItem: true
        });
    });
</script>--}}

</html>
