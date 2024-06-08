<?php

namespace Database\Seeders;

use App\Models\Sale;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sale::create([
            'product_id' => 1,
            'customer_id' => 1,
            'quantity' => 2,
            'unit_price' => 50.00,
            'total_price' => 100.00,
            'sale_date' => '2024-06-01',
        ]);

        Sale::create([
            'product_id' => 2,
            'customer_id' => 2,
            'quantity' => 1,
            'unit_price' => 75.00,
            'total_price' => 75.00,
            'sale_date' => '2024-06-02',
        ]);
    }
}
