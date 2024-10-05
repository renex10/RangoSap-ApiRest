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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del usuario
            $table->string('email')->unique(); // Correo electrónico
            $table->timestamp('email_verified_at')->nullable(); // Verificación de correo
            $table->string('password'); // Contraseña
            $table->foreignId('company_id')->constrained()->onDelete('cascade'); // Relación con la empresa
            $table->foreignId('address_id')->constrained()->onDelete('cascade'); // Relación con la dirección
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
