<?php

namespace Database\Factories;

use App\Models\ThinkingTraps;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThinkingTrapsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ThinkingTraps::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'image' => 'path/to/default/image.jpg', // Replace with your default image path
        ];
    }
}
