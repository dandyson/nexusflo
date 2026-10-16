<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use OpenAI\Laravel\Facades\OpenAI;
use OpenAI\Responses\Chat\CreateResponse as ChatCreateResponse;
use Tests\TestCase;

class AiControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function fetchChatResponse()
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

        $user = $this->authUser();

        $response = $this->postJson(
            route('worry-balancer', $user), [
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
    public function testWorryBalancerRouteIsRateLimited(): void
    {
        // Arrange: Set up the fake OpenAI response for chat (5 fakes for the throttling limit determined on this route in the api routes file)
        OpenAI::fake(
            array_fill(0, 5, ChatCreateResponse::fake([
                'choices' => [
                    [
                        'message' => [
                            'content' => 'This is a balanced response.',
                        ],
                    ],
                ],
            ])),
        );

        $user = $this->authUser();

        // The first 5 requests should succeed.
        for ($i = 0; $i < 5; $i++) {
            $this->postJson(
                route('worry-balancer', $user), [
                    'text' => 'Hello!',
                    'standaloneWorryBalancer' => true,
                ])->assertOk();
        }

        // The 6th request should be rejected.
        $this->postJson(
            route('worry-balancer', $user), [
                'text' => 'Hello!',
                'standaloneWorryBalancer' => true,
            ])->assertStatus(429);
    }

    /**
     * @test
     */
    public function guestCannotUseWorryBalancerRoute()
    {
        OpenAI::fake();

        $response = $this->postJson(
            route('worry-balancer'), [
                'text' => 'Hello!',
                'standaloneWorryBalancer' => true,
            ]);

        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /**
     * @test
     */
    public function fetchWorryBalanceResponseMissingText()
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

        $user = $this->authUser();

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

        OpenAI::assertNothingSent();
    }
}
