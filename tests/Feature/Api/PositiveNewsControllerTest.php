<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;
use App\Models\User;

class PositiveNewsControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function userCanFetchPositiveNews()
    {
        // User needs to be login to access the route
        $this->authUser();

        // Simulate a successful response for the positive-news URL
        Http::fake([
            'https://www.positive.news/' => Http::response(['fake_data' => 'test_data'], 200),
        ]);

        $response = $this->getJson(route('news-fetch'));

        $response->assertOk()
            ->assertJsonStructure([
                'data' => [
                    'positive-news',
                    'good-news-network',
                ],
            ]);
    }
}
