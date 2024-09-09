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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('imageable_type'); // Tipo de modelo relacionado (polimórfico)
            $table->unsignedBigInteger('imageable_id'); // ID del modelo relacionado (polimórfico)
            $table->string('path'); // Ruta o URL de la imagen
            $table->timestamps();
            
            // Índices para mejorar el rendimiento en consultas
            $table->index(['imageable_type', 'imageable_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
