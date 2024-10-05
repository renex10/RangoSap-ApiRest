<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Installation;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
   // Crear 10 instalaciones con un número aleatorio de zonas entre 8 y 25
   Installation::factory()->count(10)->create()->each(function ($installation) {
    // Generar un número aleatorio de zonas entre 8 y 25
    $zonesCount = rand(8, 25);
    $installation->zones()->createMany(
        \App\Models\Zone::factory()->count($zonesCount)->make()->toArray()
    );
});
    }
}
