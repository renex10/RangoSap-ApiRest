<?php

namespace Database\Factories;

use App\Models\ActivityHistory;
use App\Models\Activity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityHistoryFactory extends Factory
{
    protected $model = ActivityHistory::class;

    public function definition()
    {
        return [
            'activity_id' => Activity::factory(), // Relación con una actividad existente
            'user_id' => User::factory(), // Relación con un usuario existente
            'progress' => $this->faker->numberBetween(0, 100), // Progreso aleatorio entre 0 y 100
        ];
    }
}
