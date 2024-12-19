<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('evento', function (Blueprint $table) {
            $table->dropIndex(['fk_usuario_aprovacao']);
            $table->dropForeign(['fk_usuario_aprovacao']);
            $table->dropColumn('fk_usuario_aprovacao');
            $table->foreignId('fk_usuario_aprovacao')->nullable();
            $table->dropIndex(['fk_solicitacao_evento']);
            $table->dropForeign(['fk_solicitacao_evento']);
            $table->dropColumn('fk_solicitacao_evento');
            $table->foreignId('fk_solicitacao_evento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
