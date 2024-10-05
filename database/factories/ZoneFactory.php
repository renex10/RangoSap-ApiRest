<?php

namespace Database\Factories;

use App\Models\Zone;
use App\Models\Installation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZoneFactory extends Factory
{
    protected $model = Zone::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(), // Nombre de la zona
            'description' => $this->faker->sentence(), // Descripción opcional
            'installation_id' => Installation::factory(), // Genera una instalación asociada
        ];
    }
}
