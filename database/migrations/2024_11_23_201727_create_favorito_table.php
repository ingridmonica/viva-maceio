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
        Schema::create('favorito', function (Blueprint $table) {
            $table->id();
            $table->timestamp('data_favorito');
            $table->foreignId('id_evento')->constrained('evento');
            $table->foreignId('id_usuario')->constrained('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorito');
    }
};
