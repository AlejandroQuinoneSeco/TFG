<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrenamientosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('entrenamientos', function (Blueprint $table) {
            $table->id('numero_sesion');
            $table->date('fecha');
            $table->integer('jugadores_disponibles');
            $table->string('descripcion');
            // Agrega otros campos necesarios

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('entrenamientos');
    }
}
