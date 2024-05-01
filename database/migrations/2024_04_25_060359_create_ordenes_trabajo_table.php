<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesTrabajoTable extends Migration
{
    public function up()
    {
        Schema::create('ordenes_trabajo', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('piel', 20);
            $table->string('horma', 20);
            $table->string('suela', 20);
            $table->string('tubo', 20);
            $table->string('abono', 20);
            $table->string('precio', 20);
            $table->string('anticipo', 20);
            $table->string('tipo_venta', 20);
            $table->string('nombre', 20);
            $table->string('apellidos', 30);
            $table->string('correo', 50)->nullable();
            $table->bigInteger('numero_telefonico')->nullable();
            $table->integer('tipo')->nullable();
            $table->date('fecha', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ordenes_trabajo');
    }
}
