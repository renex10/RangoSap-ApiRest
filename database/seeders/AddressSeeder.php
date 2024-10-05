<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address; // Asegúrate de que esto esté presente

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::factory()->count(100)->create();
    }
}
