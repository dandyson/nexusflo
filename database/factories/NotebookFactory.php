<?php

namespace Database\Factories;

use App\Models\Notebook;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotebookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notebook::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'user_id' => function () {
                return User::factory()->create()->id;
            },
        ];
    }
}
