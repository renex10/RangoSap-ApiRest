<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comune;
use App\Models\Region;

class ComuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Región de Arica y Parinacota
        $region = Region::firstOrCreate(['name' => 'Región de Arica y Parinacota']);
        Comune::firstOrCreate(['name' => 'Arica', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Camarones', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Putre', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'General Lagos', 'region_id' => $region->id]);

        // Región de Tarapacá
        $region = Region::firstOrCreate(['name' => 'Región de Tarapacá']);
        Comune::firstOrCreate(['name' => 'Iquique', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Alto Hospicio', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Pica', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Pozo Almonte', 'region_id' => $region->id]);

        // Región de Antofagasta
        $region = Region::firstOrCreate(['name' => 'Región de Antofagasta']);
        Comune::firstOrCreate(['name' => 'Antofagasta', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Calama', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Taltal', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'San Pedro de Atacama', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Mejillones', 'region_id' => $region->id]);

        // Región de Atacama
        $region = Region::firstOrCreate(['name' => 'Región de Atacama']);
        Comune::firstOrCreate(['name' => 'Copiapó', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Vallenar', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Caldera', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Tierra Amarilla', 'region_id' => $region->id]);

        // Región de Coquimbo
        $region = Region::firstOrCreate(['name' => 'Región de Coquimbo']);
        Comune::firstOrCreate(['name' => 'La Serena', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Coquimbo', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Ovalle', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Illapel', 'region_id' => $region->id]);

        // Región de Valparaíso
        $region = Region::firstOrCreate(['name' => 'Región de Valparaíso']);
        Comune::firstOrCreate(['name' => 'Valparaíso', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Viña del Mar', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'San Antonio', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Quilpué', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Los Andes', 'region_id' => $region->id]);

        // Región Metropolitana de Santiago
        $region = Region::firstOrCreate(['name' => 'Región Metropolitana de Santiago']);
        Comune::firstOrCreate(['name' => 'Santiago', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Puente Alto', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Maipú', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'La Florida', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'San Bernardo', 'region_id' => $region->id]);

        // Región del Libertador General Bernardo O'Higgins
        $region = Region::firstOrCreate(['name' => 'Región del Libertador General Bernardo O’Higgins']);
        Comune::firstOrCreate(['name' => 'Rancagua', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Machalí', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Pichilemu', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'San Fernando', 'region_id' => $region->id]);

        // Región de Maule
        $region = Region::firstOrCreate(['name' => 'Región del Maule']);
        Comune::firstOrCreate(['name' => 'Talca', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Curicó', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Linares', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'San Javier', 'region_id' => $region->id]);

        // Región de Ñuble
        $region = Region::firstOrCreate(['name' => 'Región de Ñuble']);
        Comune::firstOrCreate(['name' => 'Chillán', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'San Carlos', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Yungay', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Coelemu', 'region_id' => $region->id]);

        // Región de La Araucanía
        $region = Region::firstOrCreate(['name' => 'Región de La Araucanía']);
        Comune::firstOrCreate(['name' => 'Temuco', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Padre Las Casas', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Angol', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Villarrica', 'region_id' => $region->id]);

        // Región de Los Ríos
        $region = Region::firstOrCreate(['name' => 'Región de Los Ríos']);
        Comune::firstOrCreate(['name' => 'Valdivia', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'La Unión', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Río Bueno', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Paillaco', 'region_id' => $region->id]);

        // Región de Los Lagos
        $region = Region::firstOrCreate(['name' => 'Región de Los Lagos']);
        Comune::firstOrCreate(['name' => 'Puerto Montt', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Osorno', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Castro', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Ancud', 'region_id' => $region->id]);

        // Región de Aysén
        $region = Region::firstOrCreate(['name' => 'Región de Aysén']);
        Comune::firstOrCreate(['name' => 'Coyhaique', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Puerto Aysén', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Chile Chico', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Cisnes', 'region_id' => $region->id]);

        // Región de Magallanes y la Antártica Chilena
        $region = Region::firstOrCreate(['name' => 'Región de Magallanes y la Antártica Chilena']);
        Comune::firstOrCreate(['name' => 'Punta Arenas', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Puerto Natales', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Porvenir', 'region_id' => $region->id]);
        Comune::firstOrCreate(['name' => 'Cabo de Hornos', 'region_id' => $region->id]);
        
        

    }
}
