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
        Schema::create('estadisticas', function (Blueprint $table) {
            $table->string('nombre_jugador')->primary();
            $table->string('dorsal');
            $table->integer('partidos_totales');
            $table->integer('partidos_titular');
            $table->integer('partidos_suplente');
            $table->integer('goles');
            $table->integer('minutos_jugados');
            $table->integer('tarjetas_amarillas');
            $table->integer('tarjetas_rojas');
            // Agrega otros campos necesarios


            $table->foreign('dorsal')->references('dorsal')->on('players');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('estadisticas');
    }
};
