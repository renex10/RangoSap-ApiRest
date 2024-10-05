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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street'); // Campo para la calle
            $table->string('number'); // Campo para el número
            $table->string('reference')->nullable(); // Nuevo campo 'reference', permite valores nulos
            $table->foreignId('commune_id')->constrained('communes')->onDelete('cascade'); // Relación con la tabla 'communes'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};

