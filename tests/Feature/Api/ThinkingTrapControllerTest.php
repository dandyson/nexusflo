<?php

namespace Tests\Feature\Api;

use App\Models\ThinkingTraps;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThinkingTrapControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function thinkingTrapsAreFetchedSuccessfully()
    {
        ThinkingTraps::factory()->count(5)->create();

        $response = $this->getJson(route('index'));

        $response->assertOk()
            ->assertJsonStructure([
                'thinkingTraps' => [
                    '*' => [
                        'id',
                        'title',
                        'description',
                        'image',
                    ],
                ],
            ])
            ->assertJsonCount(5, 'thinkingTraps');
    }
}
