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
            $table->date('data');
            $table->integer('idade_minima')->nullable();
            $table->text('descricao')->nullable();
            $table->string('link')->nullable();
            $table->string('imagem')->nullable();
            $table->date('data_inicio')->nullable();
            $table->date('data_fim')->nullable();
            $table->boolean('fl_ingresso')->default(false);
            $table->boolean('fl_gratis')->default(false);
            $table->boolean('fl_ativo')->default(true);
            $table->foreignId('fk_local')->nullable();
            $table->foreignId('fk_usuario_aprovacao')->constrained('usuario');
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
