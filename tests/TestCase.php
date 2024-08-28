<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    // Run tests without Vite
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();

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
