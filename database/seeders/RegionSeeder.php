<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region; // Asegúrate de usar el modelo correcto

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::create(['name' => 'Región de Arica y Parinacota']);
        Region::create(['name' => 'Región de Tarapacá']);
        Region::create(['name' => 'Región de Antofagasta']);
        Region::create(['name' => 'Región de Atacama']);
        Region::create(['name' => 'Región de Coquimbo']);
        Region::create(['name' => 'Región de Valparaíso']);
        Region::create(['name' => 'Región Metropolitana de Santiago']);
        Region::create(['name' => 'Región del Libertador General Bernardo O\'Higgins']);
        Region::create(['name' => 'Región del Maule']);
        Region::create(['name' => 'Región de Ñuble']);
        Region::create(['name' => 'Región del Biobío']);
        Region::create(['name' => 'Región de La Araucanía']);
        Region::create(['name' => 'Región de Los Ríos']);
        Region::create(['name' => 'Región de Los Lagos']);
        Region::create(['name' => 'Región de Aysén del General Carlos Ibáñez del Campo']);
        Region::create(['name' => 'Región de Magallanes y de la Antártica Chilena']);
    }
}

