<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Company; // Importa el modelo Company
use App\Models\Address; // Importa el modelo Address
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // Puedes poner aquí una contraseña por defecto o usar bcrypt
            'remember_token' => Str::random(10),
            'company_id' => Company::inRandomOrder()->first()->id, // Utiliza una compañía existente
            'address_id' => Address::inRandomOrder()->first()->id, // Utiliza una dirección existente
        ];
    }
}

