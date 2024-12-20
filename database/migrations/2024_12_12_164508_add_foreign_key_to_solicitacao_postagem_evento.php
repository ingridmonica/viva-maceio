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
        Schema::table('solicitacao_postagem_evento', function (Blueprint $table) {
            $table->foreign('fk_local')->references('id')->on('solicitacao_local_evento');
            $table->foreign('fk_usuario_solicitante')->references('id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('solicitacao_postagem_evento', function (Blueprint $table) {
            //
        });
    }
};
