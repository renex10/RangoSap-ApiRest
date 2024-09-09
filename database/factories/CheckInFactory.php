<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Check_in;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\check_in>
 */
class CheckInFactory extends Factory
{
    protected $model = Check_In::class;


    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'check_in_time' => $this->faker->dateTimeThisYear(),
            'check_out_time' => $this->faker->dateTimeThisYear(),
        ];
    }
}
