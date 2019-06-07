<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisponibilidadAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibilidad_aulas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('salon');
            $table->string('dia');
            $table->string('entrada');
            $table->string('salida');
            $table->bigInteger('grupo');
            $table->string('nombre_profesor');
            $table->string('nombre_materia');
            $table->string('codigo_materia');

            // $table->unsignedBigInteger('');

            // $table->foreign('codigo_materia')->references('id')->on('materias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disponibilidad_aulas');
    }
}
