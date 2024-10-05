<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('business_name'); // Razón social
            $table->string('dni')->unique(); // DNI único (ex-RUT)
            $table->string('address'); // Domicilio
            $table->string('business_activity'); // Giro comercial
            $table->foreignId('commune_id')->constrained('comunes')->onDelete('cascade'); // Relación con comuna
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};