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
    $table->string('street'); // Calle
    $table->string('number'); // Número de casa
    $table->string('reference')->nullable(); // Referencia opcional
    $table->foreignId('commune_id')->constrained('comunes')->onDelete('cascade'); // Referencia a la tabla comunes
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
