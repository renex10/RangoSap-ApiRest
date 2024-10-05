<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RegionSeeder::class,
            CommuneSeeder::class,
            CompanySeeder::class,
             InstallationSeeder::class,
             ZoneSeeder::class,
            AddressSeeder::class,
            UserSeeder::class,
            PhoneSeeder::class,
          
        ]);
    }
}
