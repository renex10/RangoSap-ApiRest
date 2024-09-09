<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Zone;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    /**
     * Define el estado por defecto del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Obtener un ID aleatorio de Zone y User
        $zone = Zone::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();

        // Si no hay zonas o usuarios, manejar el error
        if (!$zone || !$user) {
            throw new \Exception('No hay suficientes zonas o usuarios para crear actividades.');
        }

        return [
            'zone_id' => $zone->id,
            'user_id' => $user->id,
            'description' => $this->faker->sentence,
            'progress' => $this->faker->numberBetween(0, 100),
        ];
    }
}
