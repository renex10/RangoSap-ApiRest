<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Zone;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(), // Nombre de la actividad
            'description' => $this->faker->sentence(), // Descripción aleatoria
            'progress' => $this->faker->numberBetween(0, 100), // Progreso aleatorio entre 0 y 100
            'zone_id' => Zone::factory(), // Relación con una zona existente
            'user_id' => User::factory(), // Relación con un usuario existente
        ];
    }
}
