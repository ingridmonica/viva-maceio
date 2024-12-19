@section('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection

<x-guest-layout title="Listagem de Eventos">
    <section class="container-homepage">
        <!-- Filtros de busca -->
        <section class="container-filtros">
            <h1 class="titulo-secao">Filtros</h1>
            <form action="{{ route('eventos.listar') }}" method="GET">
                <div class="filtros">
                    <!-- Filtro de Título -->
                    <input
                        type="text"
                        name="titulo"
                        class="campo-filtro"
                        placeholder="Título do Evento"
                        value="{{ request('titulo') }}" />

                    <!-- Filtro de Categoria -->
                    <select name="categoria" class="campo-filtro">
                        <option value="">Selecione a Categoria</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->nome }}" {{ request('categoria') == $categoria->nome ? 'selected' : '' }}>{{ $categoria->nome }}</option>
                        @endforeach
                    </select>

                    <!-- Filtro de Data Início -->
                    <input type="date" name="data_hora_inicio" class="campo-filtro" value="{{ request('data_hora_inicio') }}" />

                    <!-- Filtro de Data Fim -->
                    <input type="date" name="data_hora_fim" class="campo-filtro" value="{{ request('data_hora_fim') }}" />

                    <!-- Botão de Aplicar Filtro -->
                    <button type="submit" class="botao-saiba-mais btn">Filtrar</button>
                </div>
            </form>
        </section>

        <!-- Lista de Eventos -->
        <section class="container-listagem-eventos">
            <h1 class="titulo-secao">Eventos</h1>

            @if($eventos->count())
                <div class="grid-eventos">
                    @foreach ($eventos as $evento)
                        <div class="evento-card">
                            <img src="{{ $evento->imagem }}" alt="Imagem do Evento" class="imagem-placeholder" />
                            <div class="evento-conteudo">
                                <h2 class="titulo-evento">{{ $evento->titulo }}</h2>
                                <p class="data-evento">{{ $evento->data_hora_inicio->format('d/m/Y') }} - {{ $evento->data_hora_fim->format('d/m/Y') }}</p>
                                <p class="descricao-evento">{{ $evento->descricao }}</p>
                                <a href="{{ route('eventos.show', $evento->id) }}" class="botao-saiba-mais">Saiba mais</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="nenhum-evento">Nenhum evento encontrado para os filtros aplicados.</p>
            @endif
        </section>
    </section>
</x-guest-layout>
