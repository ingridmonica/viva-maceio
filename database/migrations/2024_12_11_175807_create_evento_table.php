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
        Schema::create('evento', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('idade_minima')->nullable();
            $table->text('descricao')->nullable();
            $table->string('link')->nullable();
            $table->string('imagem')->nullable();
            $table->string('nome_organizador')->nullable();
            $table->timestamp('data_hora_inicio');
            $table->timestamp('data_hora_fim')->nullable();
            $table->boolean('fl_ingresso')->default(false);
            $table->boolean('fl_gratis')->default(false);
            $table->boolean('fl_ativo')->default(true);
            $table->foreignId('fk_local')->nullable();
            $table->unsignedBigInteger('fk_solicitacao_evento')->nullable();
            $table->foreign('fk_solicitacao_evento')->references('id')->on('solicitacao_postagem_evento')->onDelete('set null');
            $table->unsignedBigInteger('fk_usuario_aprovacao')->nullable();
            $table->foreign('fk_usuario_aprovacao')->references('id')->on('usuario')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento');
    }
};
