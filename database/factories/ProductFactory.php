<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Manufacture;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->domainName,
            'code' => rand(1000, 9999),
            'color' => $this->faker->colorName,
            'price' => rand(100,100000),
            'category_id' => Category::factory(),
            'brand_id' => Brand::factory(),
            'vendor_id' => Manufacture::factory(),
        ];
    }
}
