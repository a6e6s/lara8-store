<?php

namespace Database\Factories;

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
        $title = $this->faker->sentence(4);
        return [
            'title' => $title,
            'slug' => str_replace(' ', '_', $title),
            'summary' => $this->faker->sentence(15),
            'description' => $this->faker->sentence(30),
            'image' =>   $this->faker->image(public_path('images/product-details'), 400, 300, null, false),
            'stock' => 1,
            'condition' => 'default',
            'status' => 1,
            'price' => rand(50, 200),
            'discount' => 0,
            'featured' => 1,
            'category_id' => rand(1, 3),
            'brand_id' => rand(1, 5),
        ];
    }
}
