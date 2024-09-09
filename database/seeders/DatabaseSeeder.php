<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RegionSeeder::class,
            ComuneSeeder::class, //
            CompanySeeder::class,
            ProfileSeeder::class,
            ZoneSeeder::class,
            PhoneSeeder::class,
            ScheduleSeeder::class,
            CheckInSeeder::class,
            ActivitySeeder::class, //
         
            CompanySeeder::class,
           
   
        
           ]);
    }
}
