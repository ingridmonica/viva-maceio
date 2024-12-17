<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Viva Maceió') }}</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/layouts/guest.css')}}">
        
    </head>
   
    <div class="header">
        <div class="div-itens-nav">
            <a href="{{ route('welcome') }}"><img class="logo" src="{{ asset('img/logo.png') }}" alt="logo viva maceió"></a>
            <a href="" class="item-nav">Todos os eventos</a>
            <a href="" class="item-nav">Hoje</a>
            <a href="" class="item-nav">Próximos</a>
            <a href="" class="item-nav">Divulgue seu evento</a>
        </div>
        
       <form method="get" action="{{ route('login') }}" class="container-btn-login" >
            @csrf
            <button class="btn btn-login">Login</button>
        </form>
    </div>

    <body class="conteudo">    
        <div class="container-sm container-login-cont">
            {{ $slot }}
        </div>
    </body>
</html>
