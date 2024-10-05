<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id(); // Crea un campo de ID con tipo unsigned big integer
            $table->string('name'); // Nombre de la empresa
            $table->string('address'); // Dirección de la empresa
            $table->string('phone'); // Teléfono de la empresa
            $table->string('email')->unique(); // Correo electrónico de la empresa
            $table->string('website')->nullable(); // Sitio web de la empresa
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};