<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Check_in;
use App\Models\User;
use Carbon\Carbon;

class CheckInSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todos los usuarios
        $users = User::all();

        // Para cada usuario, crear un registro de ingreso y salida
        foreach ($users as $user) {
            // Generar un horario de entrada entre las 7:00 y las 9:00
            $checkInTime = Carbon::today()->addHours(rand(7, 9))->addMinutes(rand(0, 59));

            // Generar un horario de salida entre las 16:00 y las 18:00
            $checkOutTime = (clone $checkInTime)->addHours(rand(7, 9))->addMinutes(rand(0, 59));

            // Crear un registro de check-in para el usuario
            Check_in::create([
                'user_id' => $user->id,
                'check_in_time' => $checkInTime,
                'check_out_time' => $checkOutTime,
            ]);
        }
    }
}
