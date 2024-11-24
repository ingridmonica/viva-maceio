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
            $table->string('nome');
            $table->timestamp('data_hora');
            $table->string('local');
            $table->text('descricao');
            $table->foreignId('id_categoria')->constrained('categoria_evento');
            $table->foreignId('id_status')->constrained('status_evento');
            $table->foreignId('id_organizador')->constrained('usuario');
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
