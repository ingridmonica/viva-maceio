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
        Schema::create('organizador_solicitacao_evento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_solicitacao_evento')->constrained('solicitacao_postagem_evento');
            $table->string('nome_organizador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizador_solicitacao_evento');
    }
};
