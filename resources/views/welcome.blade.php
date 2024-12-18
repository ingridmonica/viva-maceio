<x-guest-layout title="Bem-vindo">
<section class="container-homepage">
    <!-- Eventos em destaque -->
    <section class="container-eventos-destaque">
        <h1 class="titulo-secao">Eventos em destaque</h1>
        <div class="evento-destaque">
            <!-- Card 1 -->
            <div class="evento-card destaque">
                <div class="imagem-placeholder"></div>
                <div class="evento-conteudo">
                    <h2 class="titulo-evento">Evento destaque</h2>
                    <p class="descricao-evento">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.
                    </p>
                    <a href="#" class="botao-saiba-mais">Saiba mais</a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="evento-card destaque">
                <div class="evento-conteudo">
                    <h2 class="titulo-evento">Evento destaque 2</h2>
                    <p class="descricao-evento">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.
                    </p>
                    <a href="#" class="botao-saiba-mais">Saiba mais</a>
                </div>
                <div class="imagem-placeholder"></div>
            </div>
        </div>
    </section>

    <!-- Próximos eventos -->
    <section class="container-proximos-eventos">
        <h1 class="titulo-secao">Próximos eventos</h1>
        <div class="grid-eventos">
            @for ($i = 0; $i < 4; $i++)
                <div class="evento-card">
                    <div class="imagem-placeholder"></div>
                    <div class="evento-conteudo">
                        <h2 class="titulo-evento">Título do evento</h2>
                        <p class="data-evento">20/12/2024</p>
                        <p class="descricao-evento">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="botao-saiba-mais">Saiba mais</a>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    <!-- Categorias -->
    <section class="container-categorias">
        <h1 class="titulo-secao categorias">Categorias</h1>
        <p class="descricao-categorias">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
        <div class="grid-categorias">
            @for ($i = 0; $i < 8; $i++)
                <div class="imagem-placeholder"></div>
            @endfor
        </div>
    </section>

    <!-- Divulgue seu evento -->
    <section class="divulgue-evento">
        <h1 class="titulo-secao">Divulgue seu evento!</h1>
        <a href="#" class="botao-saiba-mais">Cadastrar</a>
    </section>

</section>
</x-guest-layout>
