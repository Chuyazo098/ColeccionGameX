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
        Schema::create('progresos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('colecciones_id'); // Corregir nombre de columna
            $table->foreign('colecciones_id')->references('id')->on('colecciones'); // Corregir clave foránea
            $table->string('porcentajecompleto', 50);
            $table->integer('horasjugadas');
            $table->string('logrosdesbloqueados', 50);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progresos');
    }
};
