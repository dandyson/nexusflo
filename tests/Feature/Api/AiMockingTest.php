<?php

namespace Tests\Unit;

use OpenAI\Client;
use OpenAI\Responses\Completions\CreateResponse;
use OpenAI\Testing\ClientFake;
use Tests\TestCase;

class AiMockingTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Create and set the fake OpenAI client specifically for this test
        $fakeClient = new ClientFake([
            CreateResponse::fake([
                'choices' => [
                    [
                        'text' => 'Mocked response',
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
    public function client_fake_is_working()
    {
        // Fetch the client to test
        $client = app(Client::class);

        $completion = $client->completions()->create([
            'model' => 'gpt-4o',
            'prompt' => 'PHP is ',
        ]);

        $this->assertSame('Mocked response', $completion['choices'][0]['text']);
    }
}
