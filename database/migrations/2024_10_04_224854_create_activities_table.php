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
            $table->string('name'); // Nombre de la actividad
            $table->text('description')->nullable(); // Descripción de la actividad
            $table->integer('progress')->default(0); // Progreso de la actividad (0%-100%)
            $table->foreignId('zone_id')->constrained()->onDelete('cascade'); // Relación con la zona
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Usuario responsable
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
