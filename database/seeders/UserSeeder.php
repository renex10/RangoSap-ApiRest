<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'rene riquelme',
            'email'=>'reneprh2013@gmail.com',
            'password'=>bcrypt('pangaleluney2013')
        ]);
        User::create([
            'name'=>'rene riquelme',
            'email'=>'reneprh11@gmail.com',
            'password'=>bcrypt('tuwebenlinea2024')
        ]);

        User::factory(98)->create();
    }
}
