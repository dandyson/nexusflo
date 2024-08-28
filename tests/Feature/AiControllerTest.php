<?php

namespace Tests\Feature;

use App\Models\User;
use OpenAI\Client;
use OpenAI\Responses\Completions\CreateResponse;
use OpenAI\Testing\ClientFake;
use Tests\TestCase;

class AiControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Create and set the fake OpenAI client specifically for this test
        $fakeClient = new ClientFake([
            CreateResponse::fake([
                'choices' => [
                    [
                        'text' => 'Responding with text',
                    ],
                ],
            ]),
        ]);

        // Replace the real client with the fake client only for this test
        $this->app->instance(Client::class, $fakeClient);
    }

    /**
     * @test
     */
    public function fetch_worry_balance_response()
    {
        // Fetch the client to test
        $client = app(Client::class);

        $completion = $client->completions()->create([
            'model' => 'gpt-4o',
            'prompt' => 'PHP is ',
        ]);

        $this->assertSame('Responding with text', $completion['choices'][0]['text']);
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

        $this->assertArrayHasKey('reply', $responseData);
        $this->assertIsString($responseData['reply']);
        $this->assertNotEmpty($responseData['reply']);
    }
}
