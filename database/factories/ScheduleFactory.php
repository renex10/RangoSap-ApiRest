<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Relaciona con un usuario
            'monday' => json_encode([
                'morning' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'afternoon' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'night' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
            ]),
            'tuesday' => json_encode([
                'morning' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'afternoon' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'night' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
            ]),
            'wednesday' => json_encode([
                'morning' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'afternoon' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'night' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
            ]),
            'thursday' => json_encode([
                'morning' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'afternoon' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'night' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
            ]),
            'friday' => json_encode([
                'morning' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'afternoon' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'night' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
            ]),
            'saturday' => json_encode([
                'morning' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'afternoon' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'night' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
            ]),
            'sunday' => json_encode([
                'morning' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'afternoon' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
                'night' => $this->faker->time('H:i') . '-' . $this->faker->time('H:i'),
            ]),
        ];
    }
}
