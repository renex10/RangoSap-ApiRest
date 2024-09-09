<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;
use App\Models\Image;
use App\Models\Zone;
use App\Models\User;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todas las zonas y usuarios
        $zones = Zone::all();
        $users = User::all();

        // Para cada zona, crear 10 actividades
        foreach ($zones as $zone) {
            foreach (range(1, 10) as $i) {
                $activity = Activity::factory()->create([
                    'zone_id' => $zone->id, // Asignar la zona actual
                    'user_id' => $users->random()->id, // Asignar un usuario aleatorio
                ]);

                // Crear entre 1 y 3 imágenes para cada actividad
                Image::factory(rand(1, 3))->create([
                    'imageable_type' => Activity::class,
                    'imageable_id' => $activity->id,
                ]);
            }
        }
    }
}
