<?php

namespace Database\Factories;

use App\Models\Installation; 
use App\Models\Company; 
use Illuminate\Database\Eloquent\Factories\Factory;

class InstallationFactory extends Factory
{
    protected $model = Installation::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(), // Nombre de la instalación
            'description' => $this->faker->sentence(), // Descripción opcional
            'company_id' => Company::inRandomOrder()->first()->id, // Selecciona una compañía existente al azar
            'address' => $this->faker->address(), // Dirección de la instalación
        ];
    }
}
