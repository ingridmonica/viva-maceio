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
        Schema::create('evento_categorias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_categoria')->constrained('categoria_evento');
            $table->foreignId('fk_evento')->constrained('evento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_categorias');
    }
};
