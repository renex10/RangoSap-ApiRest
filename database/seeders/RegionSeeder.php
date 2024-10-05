<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            ['id' => 1, 'name' => 'Región de Arica y Parinacota'],
            ['id' => 2, 'name' => 'Región de Tarapacá'],
            ['id' => 3, 'name' => 'Región de Antofagasta'],
            ['id' => 4, 'name' => 'Región de Atacama'],
            ['id' => 5, 'name' => 'Región de Coquimbo'],
            ['id' => 6, 'name' => 'Región de Valparaíso'],
            ['id' => 7, 'name' => 'Región Metropolitana de Santiago'],
            ['id' => 8, 'name' => 'Región del Libertador General Bernardo O\'Higgins'],
            ['id' => 9, 'name' => 'Región del Maule'],
            ['id' => 10, 'name' => 'Región de Ñuble'],
            ['id' => 11, 'name' => 'Región del Biobío'],
            ['id' => 12, 'name' => 'Región de La Araucanía'],
            ['id' => 13, 'name' => 'Región de Los Ríos'],
            ['id' => 14, 'name' => 'Región de Los Lagos'],
            ['id' => 15, 'name' => 'Región de Aysén del General Carlos Ibáñez del Campo'],
            ['id' => 16, 'name' => 'Región de Magallanes y de la Antártica Chilena'],
        ];

        DB::table('regions')->insert($regions);
    }
}
