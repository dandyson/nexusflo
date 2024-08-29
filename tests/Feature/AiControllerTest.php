<?php

namespace Tests\Feature;

use App\Models\User;
use OpenAI\Client;
use OpenAI\Laravel\Facades\OpenAI;
use OpenAI\Responses\Chat\CreateResponse as ChatCreateResponse;
use OpenAI\Responses\Completions\CreateResponse;
use OpenAI\Testing\ClientFake;
use Tests\TestCase;

class AiControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Create and set the fake OpenAI client specifically for these tests
        $fakeClient = new ClientFake([
            CreateResponse::fake([
                'choices' => [
                    [
                        'text' => 'Responding with text',
                    ],
                ],
            ]),
        ]);

        // Replace the real client with the fake client only for these tests
        $this->app->instance(Client::class, $fakeClient);
    }

    /**
     * @test
     */
    public function test_fetch_completions_response()
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
    public function test_fetch_chat_response()
    {
        // Arrange: Set up the fake OpenAI response for chat
        OpenAI::fake([
            ChatCreateResponse::fake([
                'choices' => [
                    [
                        'message' => [
                            'content' => 'This is a balanced response.',
                        ],
                    ],
                ],
            ]),
        ]);

        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->postJson(route('worry-balancer', $user), [
                'text' => 'Hello!',
                'standaloneWorryBalancer' => true,
            ]);

        $response->assertStatus(200);
        $response->assertJson([
            'reply' => 'This is a balanced response.',
        ]);

        // Assert: Ensure the OpenAI API was called with the correct parameters
        OpenAI::assertSent(\OpenAI\Resources\Chat::class, function (string $method, array $parameters) {
            return $method === 'create' &&
                $parameters['model'] === 'gpt-4o' &&
                strpos($parameters['messages'][0]['content'], 'Hello!') !== false &&
                strpos($parameters['messages'][0]['content'], 'Please respond in a way that ‘balances’ a worry.') !== false &&
                strpos($parameters['messages'][0]['content'], 'Please also only respond in a HTML format.') !== false;
        });
    }

    /**
     * @test
     */
    public function test_fetch_worry_balance_response_missing_text()
    {
        // Arrange: Set up the fake OpenAI response for chat
        OpenAI::fake([
            ChatCreateResponse::fake([
                'choices' => [
                    [
                        'message' => [
                            'content' => 'This is a balanced response.',
                        ],
                    ],
                ],
            ]),
        ]);

        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->postJson(route('worry-balancer', $user), [
                'standaloneWorryBalancer' => true,
            ]);

        $response->assertStatus(422);
        $response->assertJson([
            'message' => 'The text field is required.',
            'errors' => [
                'text' => [
                    'The text field is required.',
                ],
            ],
        ]);
    }
}
