<?php

namespace Tests\Feature;

use Database\Seeders\ThinkingTrapSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThinkingTrapSeederTest extends TestCase
{
    /**
     * A test for the Thinking Traps Table.
     *
     * @return void
     */
    use RefreshDatabase;

    /**
     * Test creating a new order.
     */
    public function test_thinking_traps_successful_seed(): void
    {
        $this->seed(ThinkingTrapSeeder::class);

        $this->assertDatabaseCount('thinking_traps', 10);
    }
}
