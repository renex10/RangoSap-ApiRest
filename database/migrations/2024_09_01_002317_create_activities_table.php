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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('zone_id')->nullable()->constrained(); // Relaciona con la tabla Zones
            $table->foreignId('user_id')->constrained(); // Relaciona con la tabla User
            $table->string('description'); // Descripción de la actividad
            $table->integer('progress')->default(0); // Barra de progreso de 0% a 100%
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
