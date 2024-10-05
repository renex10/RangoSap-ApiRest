<?php

// database/factories/AddressFactory.php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Commune;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'street' => $this->faker->streetName(),
            'number' => $this->faker->buildingNumber(),
            'reference' => $this->faker->optional()->sentence(),
            'commune_id' => Commune::inRandomOrder()->first()->id, // Selecciona un ID de comuna existente
        ];
    }
}
