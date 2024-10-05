<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        $companies = [
            [
                'name' => 'Innovatech Solutions',
                'address' => 'Av. Libertador 1234, Santiago',
                'phone' => '222345678',
                'email' => 'contacto@innovatech.cl',
                'website' => 'www.innovatech.cl',
            ],
            [
                'name' => 'EcoVida S.A.',
                'address' => 'Calle Verde 4321, Valparaíso',
                'phone' => '223456789',
                'email' => 'info@ecovida.cl',
                'website' => 'www.ecovida.cl',
            ],
            [
                'name' => 'Tech Global',
                'address' => 'Calle del Sol 5678, Concepción',
                'phone' => '234567890',
                'email' => 'contacto@techglobal.cl',
                'website' => 'www.techglobal.cl',
            ],
            [
                'name' => 'Fabrica Creativa',
                'address' => 'Av. 21 de Mayo 910, Antofagasta',
                'phone' => '245678901',
                'email' => 'ventas@fabricacreativa.cl',
                'website' => 'www.fabricacreativa.cl',
            ],
            [
                'name' => 'Grupo Constructor',
                'address' => 'Calle del Progreso 1212, Temuco',
                'phone' => '256789012',
                'email' => 'info@grupoconstructor.cl',
                'website' => 'www.grupoconstructor.cl',
            ],
            [
                'name' => 'Distribuidora San Fernando',
                'address' => 'Av. Colón 3141, Rancagua',
                'phone' => '267890123',
                'email' => 'contacto@distribuidorasf.cl',
                'website' => 'www.distribuidorasf.cl',
            ],
            [
                'name' => 'Alimentos Naturales',
                'address' => 'Calle de los Abetos 789, Puerto Montt',
                'phone' => '278901234',
                'email' => 'ventas@alimentosnaturales.cl',
                'website' => 'www.alimentosnaturales.cl',
            ],
            [
                'name' => 'Servicios Financieros ABC',
                'address' => 'Av. Los Leones 456, La Serena',
                'phone' => '289012345',
                'email' => 'info@serviciosfinancierosabc.cl',
                'website' => 'www.serviciosfinancierosabc.cl',
            ],
            [
                'name' => 'Logística del Sur',
                'address' => 'Calle de la Industria 852, Iquique',
                'phone' => '290123456',
                'email' => 'contacto@logisticadelsur.cl',
                'website' => 'www.logisticadelsur.cl',
            ],
            [
                'name' => 'Salud y Bienestar Ltda.',
                'address' => 'Av. Salud 123, Arica',
                'phone' => '301234567',
                'email' => 'info@saludybienestar.cl',
                'website' => 'www.saludybienestar.cl',
            ],
        ];

        foreach ($companies as $companyData) {
            Company::firstOrCreate(
                ['email' => $companyData['email']], // Clave única
                $companyData // Otros datos
            );
        }
    }
}
