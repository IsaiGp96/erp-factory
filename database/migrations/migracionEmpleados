<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id_empleado');
            $table->string('nombre', 20);
            $table->string('apellidos', 30);
            $table->string('curp', 20);
            $table->string('rfc', 13)->nullable();
            $table->date('fecha_nac')->nullable();
            $table->string('departamento', 30)->nullable();
            $table->string('puesto', 30)->nullable();
            $table->string('correo', 50)->nullable();
            $table->bigInteger('numero_telefonico')->nullable();
            $table->integer('tipo')->nullable();
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
        Schema::dropIfExists('empleados');
    }
}

