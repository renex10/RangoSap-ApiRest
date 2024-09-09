<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       

        return [
            'middlename' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'secondlastname' => $this->faker->lastName,
            'dni' => $this->faker->unique()->numerify('########-#'), // Similar a un RUT
            'user_id' => User::factory(), // Relación con usuario
            'company_id' => \App\Models\Company::factory(), // Relación con empresa
            'position' => $this->faker->jobTitle,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->optional()->date(),
            'status' => $this->faker->randomElement(['active', 'inactive', 'suspended']),
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}
