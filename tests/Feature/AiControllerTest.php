<?php

namespace Tests\Feature;

use App\Models\User;
use OpenAI\Client;
use OpenAI\Responses\Completions\CreateResponse;
use OpenAI\Testing\ClientFake;
use Tests\TestCase;

class AiControllerTest extends TestCase
{


    /**
     * A basic feature test example.
     *
     * @return void
     *
     * @test
     */
    public function fetch_worry_balance_response()
    {
        $client = app(Client::class);

        $completion = $client->completions()->create([
            'model' => 'gpt-4o',
            'prompt' => 'PHP is ',
        ]);

        $this->assertSame($completion['choices'][0]['text'], 'Responding with text');
    }

    /**
     * @test
     */
    public function fetch_worry_balance_route_response()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->postJson(route('worry-balancer', $user), [
                'text' => 'Hello!',
            ]);

        $responseData = $response->json();

        // Check if the 'reply' field exists and is a string
        $this->assertArrayHasKey('reply', $responseData);
        $this->assertIsString($responseData['reply']);

        // Additional check: see if the 'reply' field is not empty
        $this->assertNotEmpty($responseData['reply']);
    }
}
