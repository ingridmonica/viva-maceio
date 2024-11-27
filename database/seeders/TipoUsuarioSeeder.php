<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_usuario')->insert([
            ['nome' => 'Administrador'],
            ['nome' => 'Organizador'],
            ['nome' => 'Regular'],
        ]);
    }
}
