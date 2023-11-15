<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class PositiveNewsControllerTest extends TestCase
{
  use RefreshDatabase;

  public function testUserCanFetchPositiveNews()
  {
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
