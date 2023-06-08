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
        Schema::create('calendarios', function (Blueprint $table) {
            $table->unsignedBigInteger('numero_jornada');
            $table->string('rival');
            $table->string('resultado');
            // Agrega otros campos necesarios

            $table->foreign('numero_jornada')
                ->references('numero_jornada')
                ->on('jornadas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('calendarios');
    }
};
