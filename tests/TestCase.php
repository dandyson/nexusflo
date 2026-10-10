<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use App\Models\User;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    // Run tests without Vite
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    protected function authUser(array $attributes = []): User
    {
        $user = User::factory()->create($attributes);

        $this->actingAs($user);

        return $user;
    }
}
