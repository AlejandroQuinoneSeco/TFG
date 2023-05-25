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
        Schema::create('jornadas', function (Blueprint $table) {
            $table->id('numero_jornada');
            $table->string('lugar');
            $table->date('fecha');
            $table->time('hora');
            $table->string('proximo_rival');
            $table->integer('jugadores_disponibles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('jornadas');
    }
};
