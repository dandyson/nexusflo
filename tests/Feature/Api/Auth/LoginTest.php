<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function login_screen_can_be_rendered()
    {
        $response = $this->get('/auth/login');
        $response->assertStatus(200);
    }

    /** @test */
    public function users_can_authenticate_using_the_login_screen()
    {
        $user = User::factory()->create();

        // Make a request to initialize the session
        $this->get('/sanctum/csrf-cookie');

        $response = $this->post('/api/login', [
            'email' => $user->email,
            'password' => 'password',
            '_token' => csrf_token(),
        ]);

        // Assert that the user is authenticated
        $this->assertAuthenticated();
    }

    /** @test */
    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $user = User::factory()->create();

        $this->post('/api/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
