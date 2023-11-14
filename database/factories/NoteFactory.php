<?php

namespace Database\Factories;

use App\Models\Note;
use App\Models\Notebook;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'notebook_id' => function () {
                return Notebook::factory()->create()->id;
            },
        ];
    }
}

