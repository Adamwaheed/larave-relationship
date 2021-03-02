<?php

namespace Database\Factories;

use App\Models\Manufacture;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManufactureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Manufacture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->colorName,
            'address' => $this->faker->address,
            'contact' => $this->faker->phoneNumber,
        ];
    }
}
