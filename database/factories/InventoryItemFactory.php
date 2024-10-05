<?php

namespace Database\Factories;

use App\Models\InventoryItem;
use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryItemFactory extends Factory
{
    protected $model = InventoryItem::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(), // Nombre del artículo
            'provider_id' => Provider::factory(), // Relación con un proveedor existente
            'quantity' => $this->faker->numberBetween(1, 100), // Cantidad en inventario aleatoria
        ];
    }
}
