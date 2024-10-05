<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Address; // Asegúrate de importar el modelo Address
use App\Models\Company; // Importa el modelo Company si lo necesitas

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener todas las direcciones disponibles
        $addresses = Address::all(); // Esto obtiene todas las direcciones de la base de datos

        // Verificar que haya direcciones disponibles
        if ($addresses->isEmpty()) {
            throw new \Exception('No hay direcciones disponibles para asignar a los usuarios.');
        }

        // Crear un usuario específico
        User::create([
            'name' => 'Rene Riquelme',
            'email' => 'reneprh2013@gmail.com',
            'password' => bcrypt('pangaleluney2013'), // Asegúrate de cambiar esto a una contraseña segura
            'company_id' => 8, // Asegúrate de que esta empresa exista
            'address_id' => $addresses->random()->id, // Selecciona una dirección aleatoria
        ]);

        // Crear 99 usuarios usando el factory y asignarles una compañía aleatoria
        User::factory()->count(99)->create([
            'company_id' => Company::all()->random()->id, // Asigna una compañía aleatoria
            'address_id' => $addresses->random()->id, // Asigna una dirección aleatoria
        ]);
    }
}
