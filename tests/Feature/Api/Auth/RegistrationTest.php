<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function registration_screen_can_be_rendered()
    {
        $response = $this->get('/auth/register');

        $response->assertStatus(200);
    }

    /** @test */
    public function new_users_can_register()
    {
        // Make a request to initialize the session
        $this->get('/sanctum/csrf-cookie');

        $response = $this->post('/api/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'terms' => true,
            '_token' => csrf_token(),
        ]);

        // Assert that the user is redirected (handled by Vue Router)
        $response->assertStatus(302);

        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
            'name' => 'Test User',
        ]);

        $user = User::where('email', 'test@example.com')->first();

        $this->assertNull($user->email_verified_at);
    }
}
