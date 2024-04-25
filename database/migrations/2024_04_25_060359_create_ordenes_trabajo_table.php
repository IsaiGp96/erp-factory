<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesTrabajoTable extends Migration
{
    public function up()
    {
        Schema::create('ordenes_trabajo', function (Blueprint $table) {
            $table->string('id_orden', 100)->primary();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ordenes_trabajo');
    }
}
