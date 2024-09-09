<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company, // Nombre de la empresa
            'dni' => $this->faker->unique()->numerify('########-#'), // RUT fiscal
            'company_name' => $this->faker->company, // Nombre comercial
            'business_entity' => $this->faker->word, // Tipo de entidad
            'address' => $this->faker->address, // Dirección
            'number' => $this->faker->phoneNumber, // Número de contacto
            'legal_representative' => $this->faker->name, // Representante legal
            'corporate_purpose' => $this->faker->paragraph, // Propósito corporativo
        ];
    }
}
