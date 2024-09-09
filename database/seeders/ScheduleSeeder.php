<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Recorremos todos los usuarios y les creamos 10 horarios
        User::all()->each(function ($user) {
            Schedule::factory(10)->create([
                'user_id' => $user->id, // Asociamos los horarios al usuario actual
            ]);
        });
    }
}
