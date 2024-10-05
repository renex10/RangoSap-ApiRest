<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('installations', function (Blueprint $table) {
            $table->id(); // Identificador único
            $table->string('name'); // Nombre de la instalación
            $table->text('description')->nullable(); // Descripción opcional
            $table->foreignId('company_id')->constrained()->onDelete('cascade'); // Relación con la tabla Companies
            $table->string('address')->nullable(); // Dirección de la instalación
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('installations');
    }
};
