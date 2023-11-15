<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\WorryJournalEntry;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorryJournalEntryFactory extends Factory
{
    protected $model = WorryJournalEntry::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'main_worry' => $this->faker->paragraph,
            'thinking_traps' => json_encode(['Thinking Trap 1', 'Thinking Trap 2']),
            'balanced_thought' => $this->faker->paragraph,
        ];
    }
}
