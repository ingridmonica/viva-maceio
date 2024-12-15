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
        Schema::create('local_evento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_evento')->constrained('evento');
            $table->string('nome');
            $table->string('rua');
            $table->string('cidade');
            $table->string('estado');
            $table->string('numero');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local_evento');
    }
};
