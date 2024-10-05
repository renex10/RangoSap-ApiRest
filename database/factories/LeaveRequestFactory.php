<?php

namespace Database\Factories;

use App\Models\LeaveRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeaveRequestFactory extends Factory
{
    protected $model = LeaveRequest::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Relación con un usuario existente
            'start_date' => $this->faker->date(), // Fecha de inicio aleatoria
            'end_date' => $this->faker->date(), // Fecha de finalización aleatoria
            'reason' => $this->faker->sentence(), // Motivo de la solicitud
        ];
    }
}

