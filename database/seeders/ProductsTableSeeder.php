<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product 1',
            'description' => 'Description for Product 1',
            'sku' => 'PROD001',
            'price' => 100.00,
            'supplier_id' => 1,
            'quantity' => 50,
            'reorder_level' => 10,
        ]);

        Product::create([
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'sku' => 'PROD002',
            'price' => 150.00,
            'supplier_id' => 2,
            'quantity' => 30,
            'reorder_level' => 5,
        ]);

        // Add more products as needed
    }
}
