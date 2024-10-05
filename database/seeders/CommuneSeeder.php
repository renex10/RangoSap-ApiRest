<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commune;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Commune::insert([
            // Comunas del Norte
            // Región de Arica y Parinacota
            ['name' => 'Arica', 'region_id' => 1],
            ['name' => 'Camarones', 'region_id' => 1],
            ['name' => 'Putre', 'region_id' => 1],

            // Región de Tarapacá
            ['name' => 'Iquique', 'region_id' => 2],
            ['name' => 'Alto Hospicio', 'region_id' => 2],
            ['name' => 'Pica', 'region_id' => 2],

            // Región de Antofagasta
            ['name' => 'Antofagasta', 'region_id' => 3],
            ['name' => 'Calama', 'region_id' => 3],
            ['name' => 'Tocopilla', 'region_id' => 3],
            ['name' => 'San Pedro de Atacama', 'region_id' => 3],

            // Región de Atacama
            ['name' => 'Copiapó', 'region_id' => 4],
            ['name' => 'Caldera', 'region_id' => 4],
            ['name' => 'Tierra Amarilla', 'region_id' => 4],
            ['name' => 'Vallenar', 'region_id' => 4],

            // Región de Coquimbo
            ['name' => 'La Serena', 'region_id' => 5],
            ['name' => 'Coquimbo', 'region_id' => 5],
            ['name' => 'Vicuña', 'region_id' => 5],
            ['name' => 'Illapel', 'region_id' => 5],

            // Región de Valparaíso
            ['name' => 'Valparaíso', 'region_id' => 6],
            ['name' => 'Viña del Mar', 'region_id' => 6],
            ['name' => 'Quilpué', 'region_id' => 6],
            ['name' => 'San Antonio', 'region_id' => 6],

            // Región Metropolitana de Santiago
            ['name' => 'Santiago', 'region_id' => 7],
            ['name' => 'Puente Alto', 'region_id' => 7],
            ['name' => 'Maipú', 'region_id' => 7],
            ['name' => 'Las Condes', 'region_id' => 7],

            // Región del Libertador General Bernardo O'Higgins
            ['name' => 'Rancagua', 'region_id' => 8],
            ['name' => 'Machalí', 'region_id' => 8],
            ['name' => 'Pichilemu', 'region_id' => 8],
            ['name' => 'San Fernando', 'region_id' => 8],

            // Región del Maule
            ['name' => 'Talca', 'region_id' => 9],
            ['name' => 'Curicó', 'region_id' => 9],
            ['name' => 'Linares', 'region_id' => 9],
            ['name' => 'Colbún', 'region_id' => 9],

            // Región de Ñuble
            ['name' => 'Chillán', 'region_id' => 10],
            ['name' => 'San Carlos', 'region_id' => 10],
            ['name' => 'Pemuco', 'region_id' => 10],
            ['name' => 'El Carmen', 'region_id' => 10],

            // Región del Biobío
            ['name' => 'Concepción', 'region_id' => 11],
            ['name' => 'Talcahuano', 'region_id' => 11],
            ['name' => 'Los Ángeles', 'region_id' => 11],
            ['name' => 'Chiguayante', 'region_id' => 11],

            // Región de La Araucanía
            ['name' => 'Temuco', 'region_id' => 12],
            ['name' => 'Pucón', 'region_id' => 12],
            ['name' => 'Villarrica', 'region_id' => 12],
            ['name' => 'Freire', 'region_id' => 12],

            // Región de Los Ríos
            ['name' => 'Valdivia', 'region_id' => 13],
            ['name' => 'La Unión', 'region_id' => 13],
            ['name' => 'Lago Ranco', 'region_id' => 13],
            ['name' => 'Rio Bueno', 'region_id' => 13],

            // Región de Los Lagos
            ['name' => 'Puerto Montt', 'region_id' => 14],
            ['name' => 'Puerto Varas', 'region_id' => 14],
            ['name' => 'Osorno', 'region_id' => 14],
            ['name' => 'Frutillar', 'region_id' => 14],

            // Región Aysén del General Carlos Ibáñez del Campo
            ['name' => 'Coyhaique', 'region_id' => 15],
            ['name' => 'Aysén', 'region_id' => 15],
            ['name' => 'Chile Chico', 'region_id' => 15],
            ['name' => 'Cisnes', 'region_id' => 15],

            // Región de Magallanes y de la Antártica Chilena
            ['name' => 'Punta Arenas', 'region_id' => 16],
            ['name' => 'Puerto Natales', 'region_id' => 16],
            ['name' => 'Porvenir', 'region_id' => 16],
            ['name' => 'Cabo de Hornos', 'region_id' => 16],
        ]);
    }
}
