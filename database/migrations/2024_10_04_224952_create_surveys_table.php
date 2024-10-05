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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre de la encuesta
            $table->text('description')->nullable(); // Descripción de la encuesta
            $table->enum('status', ['active', 'inactive', 'completed'])->default('active'); // Estado de la encuesta
            $table->date('start_date')->nullable(); // Fecha de inicio
            $table->date('end_date')->nullable(); // Fecha de finalización
            $table->string('survey_type')->nullable(); // Tipo de encuesta
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade'); // Usuario que creó la encuesta
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
