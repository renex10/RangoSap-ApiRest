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
        Schema::create('communes', function (Blueprint $table) {
            $table->id(); // Esto crea un campo de ID con tipo unsigned big integer
            $table->string('name'); // Nombre de la comuna
            $table->foreignId('region_id')->constrained('regions')->onDelete('cascade'); // Relación con la tabla regions
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communes');
    }
};
