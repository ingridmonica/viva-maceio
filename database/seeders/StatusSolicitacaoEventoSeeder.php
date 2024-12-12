<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSolicitacaoEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_solicitacao_evento')->insert([
            ['nome' => 'Pendente'],
            ['nome' => 'Aprovado'],
            ['nome' => 'Rejeitado'],
            ['nome' => 'Cancelado'],
        ]);
    }
}
