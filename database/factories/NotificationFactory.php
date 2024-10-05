<?php

namespace Database\Factories;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    protected $model = Notification::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Crea un nuevo usuario
            'message' => $this->faker->sentence, // Mensaje de la notificación
            'is_read' => $this->faker->boolean(50), // Estado de lectur
        ];
    }
}
