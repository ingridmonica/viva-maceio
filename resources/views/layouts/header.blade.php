<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Viva Maceió') }}</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/layouts/header.css')}}">
        <link rel="stylesheet" href="{{ asset('css/cores-padrao.css')}}">


    </head>

    <header class="header">
        <div class="div-itens-nav">
            <a href="{{ route('welcome') }}"><img class="logo" src="{{ asset('img/logo.png') }}" alt="logo viva maceió"></a>
            <a href="" class="item-nav">Todos os eventos</a>
            <a href="" class="item-nav">Hoje</a>
            <a href="" class="item-nav">Próximos</a>
            <a href="{{ route('login') }}" class="item-nav">Divulgue seu evento</a>
        </div>
        {{-- Usar ou não...
            @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a href="{{ url('/dashboard') }}">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">
                            Register
                        </a>
                    @endif
                @endauth
            </nav> 
        @endif --}}
        <div class="container-btn-login">
            <p class="item-nav loc-nav">Maceió - AL</p>
            <img src="{{ asset('icons/icon-mapa.svg') }}" alt="Ícone Mapa" class="icone"/>
        </div>
    </header>

    <body class="conteudo">    
        <div class="container-lg">
            @yield('conteudo-pagina')
        </div>
    </body>
</html>
