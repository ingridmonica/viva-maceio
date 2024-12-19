<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {

        // Remover o índice
        Schema::table('local_evento', function (Blueprint $table) {
            $table->dropIndex(['id_evento']);  // Substitua 'id_evento' pelo nome do índice
        });

        // Remover a coluna
        Schema::table('local_evento', function (Blueprint $table) {
            $table->dropColumn('id_evento');
        });

        // Remover a chave estrangeira
        Schema::table('evento', function (Blueprint $table) {
            $table->dropForeign(['fk_local']);  // Substitua 'id_evento' pelo nome da coluna que possui a chave estrangeira
        });

    }

    public function down()
    {

    }
};
