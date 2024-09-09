<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comune>
 */
class ComuneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
      /*   'name' => $this->faker->city,  // Genera nombres de ciudades aleatorias
        'region_id' => \App\Models\Region::factory(),  // Relaciona con la tabla Region */
        ];
    }
}
