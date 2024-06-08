<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventory::create([
            'product_id' => 1,
            'quantity' => 100,
            'location' => 'Warehouse A',
            'expiration_date' => '2024-12-31',
            'manufacture_date' => '2023-01-01',
        ]);

        Inventory::create([
            'product_id' => 2,
            'quantity' => 50,
            'location' => 'Warehouse B',
            'expiration_date' => '2025-06-30',
            'manufacture_date' => '2024-01-01',
        ]);

        // Add more inventory items as needed
    }
}
