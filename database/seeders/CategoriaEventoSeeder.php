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
        DB::table('categoria_evento')->insert([
            ['nome' => 'Música'],
            ['nome' => 'Teatro'],
            ['nome' => 'Gastronomia'],
            ['nome' => 'Esportes'],
            ['nome' => 'Exposições'],
            ['nome' => 'Tecnologia'],
            ['nome' => 'Educação'],
            ['nome' => 'Artes'],
            ['nome' => 'Cinema'],
            ['nome' => 'Games'],
        ]);
    }
}
