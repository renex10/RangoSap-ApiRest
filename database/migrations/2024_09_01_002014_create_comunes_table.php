<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comunes', function (Blueprint $table) {
            $table->id(); // Esto genera un campo unsignedBigInt por defecto
            $table->string('name');
            $table->foreignId('region_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('comunes');
    }
};
