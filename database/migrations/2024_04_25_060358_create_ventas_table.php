<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->string('id_venta', 100);
            $table->string('id_articulo', 100);
            $table->string('descripción', 100);
            $table->foreignId('id_empleado')->constrained('empleados');
            $table->integer('anticipo');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}

