<?php

namespace Database\Factories;

use App\Models\InventoryAlert;
use App\Models\InventoryItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryAlertFactory extends Factory
{
    protected $model = InventoryAlert::class;

    public function definition()
    {
        return [
            'inventory_item_id' => InventoryItem::factory(), // Crea un nuevo item de inventario
            'threshold' => $this->faker->numberBetween(1, 100), // Umbral entre 1 y 100
        ];
    }
}
