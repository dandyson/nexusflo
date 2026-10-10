<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

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
