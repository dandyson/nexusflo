<?php

namespace Tests\Unit;

use OpenAI\Client;
use OpenAI\Testing\ClientFake;
use OpenAI\Responses\Completions\CreateResponse;
use Tests\TestCase;

class AiMockingTest extends TestCase
{
    public function testClientFake()
    {
        $client = new ClientFake([
            CreateResponse::fake([
                'choices' => [
                    [
                        'text' => 'Mocked response',
                    ],
                ],
            ]),
        ]);

        $response = $client->completions()->create([
            'model' => 'gpt-4o',
            'prompt' => 'Test prompt',
        ]);

        $this->assertSame($response['choices'][0]['text'], 'Mocked response');
    }
}
