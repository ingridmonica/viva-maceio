<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evento;
use App\Models\LocalEvento;
use App\Models\Categoria;
use App\Models\EventoCategorias;
use Carbon\Carbon;

class EventoSeeder extends Seeder
{
    public function run()
    {

        // Criação dos locais de eventos
        $locais = [
            ['nome' => 'Centro de Convenções', 'rua' => 'Av. das Flores', 'cidade' => 'São Paulo', 'estado' => 'SP', 'numero' => '123'],
            ['nome' => 'Ginásio Municipal', 'rua' => 'Rua das Palmeiras', 'cidade' => 'Rio de Janeiro', 'estado' => 'RJ', 'numero' => '456'],
            ['nome' => 'Teatro Nacional', 'rua' => 'Praça da República', 'cidade' => 'Brasília', 'estado' => 'DF', 'numero' => '789'],
            ['nome' => 'Parque Central', 'rua' => 'Alameda das Hortênsias', 'cidade' => 'Curitiba', 'estado' => 'PR', 'numero' => '321'],
            ['nome' => 'Estádio Olímpico', 'rua' => 'Av. das Nações', 'cidade' => 'Porto Alegre', 'estado' => 'RS', 'numero' => '654']
        ];

        $locaisIds = [];
        foreach ($locais as $local) {
            $locaisIds[] = LocalEvento::create($local)->id;
        }

        // Criação dos eventos
        $eventos = [
            [
                'titulo' => 'Tech Conference 2024',
                'idade_minima' => 16,
                'descricao' => 'Uma conferência sobre as tendências da tecnologia.',
                'link' => 'https://techconference2024.com',
                'imagem' => 'https://www.euax.com.br/wp-content/uploads/2024/08/eventos-de-tecnologia.webp',
                'nome_organizador' => 'John Doe',
                'data_hora_inicio' => Carbon::now()->addDays(15),
                'data_hora_fim' => Carbon::now()->addDays(17),
                'fl_ingresso' => true,
                'fl_gratis' => false,
                'fl_ativo' => true,
                'fl_destaque' => true,
                'fk_local' => $locaisIds[0],
                'fk_usuario_aprovacao' => null,
                'fk_solicitacao_evento' => null,

            ],
            [
                'titulo' => 'Maratona Esportiva',
                'idade_minima' => 12,
                'descricao' => 'Um evento esportivo para toda a família.',
                'link' => 'https://esporte.com',
                'imagem' => 'https://esportividade.com.br/wp-content/uploads/2022/04/maratonasp2022_corredora.jpg',
                'nome_organizador' => 'Jane Smith',
                'data_hora_inicio' => Carbon::now()->addDays(20),
                'data_hora_fim' => Carbon::now()->addDays(20),
                'fl_ingresso' => true,
                'fl_gratis' => false,
                'fl_ativo' => true,
                'fl_destaque' => false,
                'fk_local' => $locaisIds[1],
                'fk_usuario_aprovacao' => null,
                'fk_solicitacao_evento' => null,
            ],
            // Adicione mais eventos...
        ];

        $eventoIds = [];
        foreach ($eventos as $evento) {
            $eventoIds[] = Evento::create($evento)->id;
        }

        // Associação entre eventos e categorias
        $associacoes = [
            ['fk_evento' => $eventoIds[0], 'fk_categoria' => 6], // Tech Conference - Tecnologia
            ['fk_evento' => $eventoIds[1], 'fk_categoria' => 4], // Maratona Esportiva - Esportes
        ];

        foreach ($associacoes as $associacao) {
            EventoCategorias::create($associacao);
        }
    }
}

