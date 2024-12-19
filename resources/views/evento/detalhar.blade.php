<x-guest-layout title="Bem-vindo">
    <section class="container-homepage">

        <section class="container-eventos-destaque">

            <h1 class="titulo-secao">{{ $evento->titulo }}</h1>
            <div class="evento-destaque">
                <div class="evento-card destaque">
                    <img src="{{ $evento->imagem }}" alt="Imagem" class="imagem-placeholder" />
                </div>
            </div>

        </section>

        <section class="container-proximos-eventos">
            <div class="grid-eventos">
                <div class="evento-card">
                    <div class="evento-conteudo">
                        <h2 class="titulo-evento">O que?</h2>
                        <p class="descricao-evento">{{ $evento->descricao }}</p>
                    </div>
                </div>

                <div class="evento-card">
                    <div class="evento-conteudo">
                        <h2 class="titulo-evento">Quando?</h2>
                        <p class="descricao-evento">{{ $evento->data_inicio->format('d/m/Y') }} - {{ $evento->data_fim->format('d/m/Y') }}</p>
                    </div>
                </div>

                <div class="evento-card">
                    <div class="evento-conteudo">
                        <h2 class="titulo-evento">Onde?</h2>
                        <p class="descricao-evento">{{ $evento->local->rua}}, {{ $evento->local->numero}}. {{ $evento->local->cidade}} - {{ $evento->local->estado}}</p>
                    </div>
                </div>

                <div class="evento-card">
                    <div class="evento-conteudo">
                        <h2 class="titulo-evento">Como acessar?</h2>
                        <p class="descricao-evento">{{ $evento->link }}</p>
                    </div>
                </div>
            </div>
        </section>




    </section>
</x-guest-layout>
