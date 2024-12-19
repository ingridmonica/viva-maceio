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
            ['nome' => 'Música', 'icone' => ' '],
            ['nome' => 'Teatro', 'icone' => ' '],
            ['nome' => 'Gastronomia', 'icone' => ' '],
            ['nome' => 'Esportes', 'icone' => ' '],
            ['nome' => 'Exposições', 'icone' => ' '],
            ['nome' => 'Tecnologia', 'icone' => ' '],
            ['nome' => 'Educação', 'icone' => ' '],
            ['nome' => 'Artes', 'icone' => ' '],
            ['nome' => 'Cinema', 'icone' => ' '],
            ['nome' => 'Games', 'icone' => ' '],
        ]);
    }
}
