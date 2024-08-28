<?php

namespace Tests;
use OpenAI\Client;
use OpenAI\Testing\ClientFake;
use OpenAI\Responses\Completions\CreateResponse;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        // Create and set the fake OpenAI client
        $fakeClient = new ClientFake([
            CreateResponse::fake([
                'choices' => [
                    [
                        'text' => 'Mocked response',
                    ],
                ],
            ]),
        ]);

        // Ensure the mock client is applied for all tests
        $this->app->instance(Client::class, $fakeClient);
    }
}
