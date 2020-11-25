<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'subtitle' => $this->faker->text(50),
            'description' => $this->faker->text(200),
            'link' => $this->faker->url,
            'link_text' => 'Read More',
            'image' => 'images\home\girl2.jpg',
        ];
    }
}
