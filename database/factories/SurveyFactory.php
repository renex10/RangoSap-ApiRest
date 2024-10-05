<?php

namespace Database\Factories;

use App\Models\Survey;
use App\Models\User; // Asegúrate de importar el modelo User
use Illuminate\Database\Eloquent\Factories\Factory;

class SurveyFactory extends Factory
{
    protected $model = Survey::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3), // Nombre de la encuesta
            'description' => $this->faker->paragraph(), // Descripción de la encuesta
            'status' => $this->faker->randomElement(['active', 'inactive', 'completed']), // Estado de la encuesta
            'start_date' => $this->faker->date(), // Fecha de inicio
            'end_date' => $this->faker->date(), // Fecha de finalización
            'survey_type' => $this->faker->word(), // Tipo de encuesta
            'created_by' => User::factory(), // Referencia a un usuario que crea la encuesta
        ];
    }
}
