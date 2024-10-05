<?php

namespace Database\Seeders;

use App\Models\Phone; // Asegúrate de importar el modelo Phone
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 100 números de teléfono para usuarios existentes
        Phone::factory()->count(100)->create();
    }
}
