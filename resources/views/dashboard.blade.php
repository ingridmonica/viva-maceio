@section('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

<x-app-layout>
    <div class="container-adicionar-eventos">
        <h2 class="titulo-secao">Divulgue seu evento conosco</h2>
        <span class="subtitulo-secao">Envie uma solicitação de postagem de evento para analisarmos</span>
        
        <div class="container-cadastro-evento">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <h3 class="titulo">Informações do Evento</h3>
                <div class="form-grid">
                    <div>
                        <input type="text" id="titulo" name="titulo" class="input-padrao-evento" placeholder="Título do Evento*" required>
                    </div>
                    <div>
                        <input type="text" id="nome_organizador" name="nome_organizador" class="input-padrao-evento" placeholder="Nome do Organizador">
                    </div>
                    <div class="full-width">
                        <textarea id="descricao" name="descricao" class="textarea-padrao" rows="3" placeholder="Descrição do Evento"></textarea>
                    </div>
                    <div>
                        <label for="data_hora_inicio" class="text-comum">Data e Hora Início*</label>
                        <input type="datetime-local" id="data_hora_inicio" name="data_hora_inicio" class="input-padrao-evento" required>
                    </div>
                    <div>
                        <label for="data_hora_fim" class="text-comum">Data e Hora Fim</label>
                        <input type="datetime-local" id="data_hora_fim" name="data_hora_fim" class="input-padrao-evento">
                    </div>
                    <div>
                        <label for="idade_minima" class="text-comum">Idade mínima</label>
                        <input type="number" id="idade_minima" name="idade_minima" class="input-padrao-evento" >
                    </div>
                    <div>
                        <label for="imagem" class="text-comum">Imagem do Evento</label>
                        <input type="file" id="imagem" name="imagem" class="input-padrao-evento imagem">
                    </div>
                    <div class="full-width">
                        <input type="url" id="link" name="link" class="input-padrao-evento" placeholder="Link para mais informações">
                    </div>
                </div>

                <div class="form-grid mt-2">
                    <div class="form-check">
                        <input type="checkbox" id="fl_ingresso" name="fl_ingresso" class="form-check-input">
                        <label for="fl_ingresso" class="form-check-label">Necessário a compra de ingresso</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="fl_gratis" name="fl_gratis" class="form-check-input">
                        <label for="fl_gratis" class="form-check-label">Gratuito</label>
                    </div>
                </div>

                <h3 class="titulo">Informações do Local</h3>
                <div class="form-grid">
                    <div>
                        <input type="text" id="local_nome" name="local_nome" class="input-padrao-evento" placeholder="Nome do Local*" required>
                    </div>
                    <div>
                        <input type="text" id="local_rua" name="local_rua" class="input-padrao-evento" placeholder="Rua*" required>
                    </div>
                    <div>
                        <input type="text" id="local_cidade" name="local_cidade" class="input-padrao-evento" placeholder="Cidade*" required>
                    </div>
                    <div>
                        <input type="text" id="local_estado" name="local_estado" class="input-padrao-evento" placeholder="Estado*" required>
                    </div>
                    <div class="full-width">
                        <input type="text" id="local_numero" name="local_numero" class="input-padrao-evento" placeholder="Número*" required>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-4 mb-2">
                    <button type="submit" class="btn btn-enviar">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
