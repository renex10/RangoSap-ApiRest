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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('middlename'); // Segundo nombre
            $table->string('lastname'); // Apellido paterno
            $table->string('secondlastname'); // Apellido materno
            $table->string('dni')->unique(); // DNI o RUT único
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relación 1:1 con users
            $table->foreignId('company_id')->constrained(); // Relación con la empresa (company)
            $table->string('position'); // Cargo de la persona en la empresa
            $table->date('start_date'); // Fecha de inicio del contrato
            $table->date('end_date')->nullable(); // Fecha de término del contrato (opcional)
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('active'); // Estado del perfil
            $table->string('email')->unique(); // Correo electrónico
            $table->string('phone_number'); // Número de teléfono
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
