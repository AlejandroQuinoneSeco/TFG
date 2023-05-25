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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id('id_equipo');
            $table->string('nombre_equipo');
            $table->string('color_equipacion');
            // Agrega otros campos necesarios

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
};
