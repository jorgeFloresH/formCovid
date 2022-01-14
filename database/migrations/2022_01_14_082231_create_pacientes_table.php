<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100); 
            $table->string('apellido',100);
            $table->string('segundo_apellido',100)->nullable();
            $table->string('apellido_casada',100)->nullable();
            $table->string('carnet',50);
            $table->string('telefono', 50)->nullable();
            $table->string('celular',50)->nullable();
            $table->integer('edad')->nullable();
            $table->string('tipo_prueba',100)->nullable();
            $table->string('resultado')->nullable();
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
        Schema::dropIfExists('pacientes');
    }
}
