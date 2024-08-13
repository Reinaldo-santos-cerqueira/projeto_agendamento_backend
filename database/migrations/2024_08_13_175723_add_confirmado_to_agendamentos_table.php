<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('agendamentos', function (Blueprint $table) {
            $table->boolean('confirmado')->default(false); // Adiciona o campo 'confirmado'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agendamentos', function (Blueprint $table) {
            $table->dropColumn('confirmado'); // Remove o campo 'confirmado'
        });
    }
};
