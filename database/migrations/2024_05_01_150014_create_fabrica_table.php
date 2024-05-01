<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fabrica', function (Blueprint $table) {
            $table->id();
            $table->boolean('piel', 20);
            $table->boolean('horma', 20);
            $table->boolean('suela', 20);
            $table->boolean('tubo', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fabrica');
    }
};
