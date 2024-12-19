@section('styles')
<link rel="stylesheet" href="{{ asset('css/homepage.css')}}">
@endsection

<x-guest-layout title="Bem-vindo">
    <section class="container-homepage">
        <!-- Eventos em destaque -->
        <section class="container-eventos-destaque">
            <h1 class="titulo-secao">Eventos em destaque</h1>
            <div class="evento-destaque">
                @foreach ($eventosDestaque as $evento)
                    <div class="evento-card destaque">
                        <img src="{{ $evento->imagem }}" alt="Imagem" class="imagem-placeholder" />
                        <div class="evento-conteudo">
                            <h2 class="titulo-evento">{{ $evento->titulo }}</h2>
                            <p class="descricao-evento">{{ $evento->descricao }}</p>
                            <a href="{{ route('eventos.show', $evento->id) }}" class="botao-saiba-mais">Saiba mais</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Próximos eventos -->
        <section class="container-proximos-eventos">
            <h1 class="titulo-secao">Próximos eventos</h1>
            <div class="grid-eventos">
                @foreach ($proximosEventos as $evento)
                    <div class="evento-card">

                        <img src="{{ $evento->imagem }}" alt="Imagem" class="imagem-placeholder" />
                        <div class="evento-conteudo">
                            <h2 class="titulo-evento">{{ $evento->titulo }}</h2>
                            <p class="data-evento">{{ $evento->data_hora_inicio->format('d/m/Y') }} - {{ $evento->data_hora_fim->format('d/m/Y') }} </p>
                            <p class="descricao-evento">{{ $evento->descricao }}</p>
                            <a href="{{ route('eventos.show', $evento->id) }}" class="botao-saiba-mais">Saiba mais</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Categorias -->
        <section class="container-categorias">
            <h1 class="titulo-secao categorias">Categorias</h1>
            <p class="descricao-categorias">Explore as diversas categorias de eventos disponíveis na plataforma.</p>
            <div class="grid-categorias">
                @foreach ($categorias as $categoria)
                    <div class="categoria-item">
                        <div class="imagem-placeholder"></div>
                        <p class="categoria-nome">{{ $categoria->nome }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Divulgue seu evento -->
        <section class="divulgue-evento">
            <h1 class="titulo-secao">Divulgue seu evento!</h1>
            <a href="" class="botao-saiba-mais">Cadastrar</a>
        </section>
    </section>
</x-guest-layout>
