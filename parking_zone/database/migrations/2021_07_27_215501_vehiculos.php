<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->string('matricula',200)->primary();
            $table->enum('marca', ['chevrolet', 'renault','hyundai','citroen','otro']);
            $table->enum('color', ['rojo', 'blanco','negro','azul','otro']);
            $table->enum('tipo', ['automovil', 'motocicleta','bicicleta','camion','otro']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
