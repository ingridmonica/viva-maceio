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
            $table->foreign('fk_local')->references('id')->on('local_evento');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evento', function (Blueprint $table) {
            //
        });
    }
};
