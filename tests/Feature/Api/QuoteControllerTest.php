<?php

namespace Tests\Feature\Api;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class QuoteControllerTest extends TestCase
{
  use RefreshDatabase;

  public function testQuotesAreFetchedSuccessfully()
  {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->getJson(route('quotes'));

    $response->assertOk()
      ->assertJsonStructure([
        '*' => [
          'text',
          'author'
        ],
      ]);
  }
}

