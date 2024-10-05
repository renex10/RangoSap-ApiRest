<?php

namespace Database\Factories;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    protected $model = Phone::class;

    public function definition(): array
    {
        return [
            'prefix' => '+569', // Prefijo fijo para Chile
            'number' => $this->faker->numberBetween(60000000, 69999999), // Genera un número aleatorio de 8 dígitos
            'user_id' => \App\Models\User::inRandomOrder()->first()->id, // Asigna un usuario aleatorio existente
        ];
    }
}
