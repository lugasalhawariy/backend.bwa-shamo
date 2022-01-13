<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => Str::random(50),
            'price' => 15000,
            'categories_id' => 1,
            'tags' => 'barang'
        ];
    }
}
