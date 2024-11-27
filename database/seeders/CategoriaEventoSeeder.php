<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class CategoriaEventoSeeder extends Seeder
{
    /**
     * Run the database seeds. RODARR => VER SE OS NOMES VAI SER ASSIM MSM
     */
    public function run(): void
    {
        DB::table('categorias_evento')->insert([
            ['nome' => 'Música', 'descricao' => 'Shows, festivais e apresentações musicais.'],
            ['nome' => 'Teatro', 'descricao' => 'Peças teatrais e eventos culturais.'],
            ['nome' => 'Gastronomia', 'descricao' => 'Eventos relacionados à culinária e gastronomia.'],
            ['nome' => 'Esportes', 'descricao' => 'Competições, torneios e eventos esportivos.'],
            ['nome' => 'Exposições', 'descricao' => 'Exibições artísticas, científicas e culturais.'],
        ]);
    }
}
