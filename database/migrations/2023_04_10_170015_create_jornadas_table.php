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
        Schema::create('jornadas', function (Blueprint $table) {
            $table->id('Numero_jornada');
            $table->string('Lugar',40);
            $table->date('Fecha');
            $table->time('Hora');
            $table->string('Proximo_rival',40);
            $table->string('Anterior_rival',40);
            $table->integer('Jugadores_disponibles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jornadas');
    }
};
