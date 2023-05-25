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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id('id_entrenador');
            $table->string('nombre_entrenador');
            $table->string('funcion_entrenador');
            // Agrega otros campos necesarios

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('trainers');
    }
};
