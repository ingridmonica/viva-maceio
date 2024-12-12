<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PapelUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('papel_usuario')->insert([
            ['nome' => 'Desenvolvedor'],
            ['nome' => 'Gerente'],
        ]);
    }
}
