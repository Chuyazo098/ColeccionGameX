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
Schema::create('colecciones', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('user_id');
    $table->unsignedBigInteger('juego_id');
    $table->foreign('user_id')->references('id')->on('users');
    $table->foreign('juego_id')->references('id')->on('juegos'); // Corregir aquí
    $table->float('calificacion');
    $table->string('comentario', 100);
    $table->date('fechaadquisicion');
    $table->enum('status', ['active', 'inactive'])->default('active');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colecciones');
    }
};
