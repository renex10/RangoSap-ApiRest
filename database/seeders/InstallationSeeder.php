<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Installation;
use App\Models\Company;

class InstallationSeeder extends Seeder
{
    public function run()
    {
        // Itera sobre cada compañía y genera entre 1 y 10 instalaciones
        Company::all()->each(function ($company) {
            Installation::factory()
                ->count(rand(1, 10)) // Ajusta el rango a tus necesidades
                ->create(['company_id' => $company->id]);
        });
    }
}
