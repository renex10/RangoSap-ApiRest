<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profile;
use App\Models\Activity;
use App\Models\check_in;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    protected $model = \App\Models\Image::class;

    /**
     * Define el estado por defecto del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $models = [Profile::class, Activity::class, Check_In::class];

        // Asegúrate de que al menos un modelo tenga registros
        $model = $models[array_rand($models)];
        $modelInstance = $model::inRandomOrder()->first();

        // Si no hay registros, crea uno nuevo para evitar el error
        if (!$modelInstance) {
            $modelInstance = $model::factory()->create();
        }

        return [
            'imageable_type' => $model,
            'imageable_id' => $modelInstance->id,
            'path' => $this->faker->imageUrl(), // Ruta de la imagen
        ];
    }
}
