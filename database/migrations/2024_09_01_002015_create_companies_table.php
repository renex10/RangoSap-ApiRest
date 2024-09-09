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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre de la empresa
            $table->string('dni')->unique(); // Identificación fiscal o RUT
            $table->string('company_name'); // Nombre comercial
            $table->string('business_entity'); // Tipo de entidad jurídica
            $table->string('address'); // Dirección
            $table->string('number'); // Número de contacto
            $table->string('legal_representative'); // Representante legal
            $table->text('corporate_purpose'); // Propósito corporativo
            $table->timestamps(); // Fechas de creación y última actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
