<?php

namespace Database\Factories;

use App\Models\PerformanceMetric;
use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerformanceMetricFactory extends Factory
{
    protected $model = PerformanceMetric::class;

    public function definition()
    {
        return [
            'activity_id' => Activity::factory(), // Relación con una actividad existente
            'completion_percentage' => $this->faker->numberBetween(0, 100), // Porcentaje de finalización aleatorio entre 0 y 100
        ];
    }
}
