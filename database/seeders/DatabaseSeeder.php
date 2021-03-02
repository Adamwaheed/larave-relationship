<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        Product::factory()->count(100)->create();
        Brand::factory()->has(Product::factory()->count(100))->count(10)->create();
    }
}
