<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_eventos')->insert([
            ['nome' => 'Pendente', 'descricao' => 'Evento aguardando aprovação.'],
            ['nome' => 'Aprovado', 'descricao' => 'Evento aprovado e disponível publicamente.'],
            ['nome' => 'Rejeitado', 'descricao' => 'Evento rejeitado pela administração.'],
            ['nome' => 'Cancelado', 'descricao' => 'Evento cancelado pelo organizador.'],
        ]);
    }
}
