<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\SaleTableSeeder;
use Database\Seeders\ProductsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'john',
            'email' => 'testk@gmail.com',
            
        ]);
        $this->call(CustomersTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(InventoryTableSeeder::class);
        $this->call(SaleTableSeeder::class);
    }
}
