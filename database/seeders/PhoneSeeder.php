<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Recorremos todos los perfiles y les creamos un teléfono
        Profile::all()->each(function ($profile) {
            Phone::factory()->create([
                'profile_id' => $profile->id, // Asociamos el teléfono al perfil actual
            ]);
        });
    }
}
