@section('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css')}}">
@endsection


<x-app-layout>
    <div class="container-adicionar-eventos">
        <div class="container-cadastro-evento">
            <h2 class="titulo-secao">Divulgue seu evento conosco</h2>
            <p class="text-comum">Envie uma solicitação de postagem de evento para analisarmos</p>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <h3 class="titulo">Informações do Evento</h4>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="titulo" class="form-label">Título*</label>
                        <input type="text" id="titulo" name="titulo" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nome_organizador" class="form-label">Nome do Organizador</label>
                        <input type="text" id="nome_organizador" name="nome_organizador" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea id="descricao" name="descricao" class="form-control" rows="3"></textarea>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="data_hora_inicio" class="form-label">Data e Hora Início*</label>
                        <input type="datetime-local" id="data_hora_inicio" name="data_hora_inicio" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="data_hora_fim" class="form-label">Data e Hora Fim</label>
                        <input type="datetime-local" id="data_hora_fim" name="data_hora_fim" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="idade_minima" class="form-label">Idade Mínima</label>
                        <input type="text" id="idade_minima" name="idade_minima" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="imagem" class="form-label">Imagem</label>
                        <input type="file" id="imagem" name="imagem" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" id="link" name="link" class="form-control">
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input type="checkbox" id="fl_ingresso" name="fl_ingresso" class="form-check-input">
                        <label for="fl_ingresso" class="form-check-label">Necessário a compra de ingresso</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="fl_gratis" name="fl_gratis" class="form-check-input">
                        <label for="fl_gratis" class="form-check-label">Gratuito</label>
                    </div>
                </div>
                <h4>Informações do Local</h4>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="local_nome" class="form-label">Nome do Local*</label>
                        <input type="text" id="local_nome" name="local_nome" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="local_rua" class="form-label">Rua*</label>
                        <input type="text" id="local_rua" name="local_rua" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="local_cidade" class="form-label">Cidade*</label>
                        <input type="text" id="local_cidade" name="local_cidade" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="local_estado" class="form-label">Estado*</label>
                        <input type="text" id="local_estado" name="local_estado" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="local_numero" class="form-label">Número*</label>
                        <input type="text" id="local_numero" name="local_numero" class="form-control" required>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div> 
    </div>

</x-app-layout>
