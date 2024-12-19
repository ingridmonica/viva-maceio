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
        Schema::create('solicitacao_postagem_evento', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->date('data');
            $table->integer('idade_minima')->nullable();
            $table->text('descricao')->nullable();
            $table->string('link')->nullable();
            $table->string('imagem')->nullable();
            $table->timestamp('data_hora_inicio')->nullable();
            $table->timestamp('data_hora_fim')->nullable();
            $table->boolean('fl_ingresso')->default(false);
            $table->boolean('fl_gratis')->default(false);
            $table->foreignId('fk_local')->nullable();
            $table->foreignId('fk_status')->constrained('status_solicitacao_evento');
            $table->foreignId('fk_usuario_solicitante')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitacao_postagem_evento');
    }
};
