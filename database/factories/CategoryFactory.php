<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cats = ['Kids', 'FASHION', 'Households', 'Interiors', 'Clothing', 'Bags', 'Shoes', 'Womens'];
        return [
            'name' => $cats[rand(0, 7)],
            'description' => $this->faker->sentence(10),
            'image' => $this->faker->imageUrl(),
            'status' => 1,
            'featured' => 1,
        ];
    }
}
