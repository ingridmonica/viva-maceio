<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('evento', function (Blueprint $table) {
            $table->string('nome_organizador');
            $table->foreignId('fk_solicitacao_evento')->constrained('solicitacao_postagem_evento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evento', function (Blueprint $table) {
            $table->dropColumn('nome_organizador');
            $table->dropColumn('fk_solicitacao_evento');
        });
    }
};
