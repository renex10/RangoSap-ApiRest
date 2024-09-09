<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Recorremos todos los usuarios y les creamos un perfil
        //User::all()->each(function ($user) {
        // Profile::factory()->create([
        //'user_id' => $user->id, // Asociamos el perfil al usuario actual
        //]);
        //});

        $users = User::all(); // Obtenemos todos los usuarios

        foreach ($users as $user) {
            Profile::factory()->create([
                'user_id' => $user->id, // Asociamos el perfil al usuario actual
            ]);
        }
    }
}
