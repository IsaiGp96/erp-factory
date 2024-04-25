<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('id_sesion', 512);
            $table->string('contraseña', 512);
            $table->foreignId('id_empleado')->constrained('empleados');
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
