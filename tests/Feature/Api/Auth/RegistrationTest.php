<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
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
        $response = $this->post('/api/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'terms' => true,
        ]);

        $this->assertAuthenticated();
        // Assert the redirect matches Fortify's default behavior - in the app, after Fortify does this redirect,
        // the frontend will redirect via Vue Router anyway, see Register.vue) so this is fine to satisfy the test
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
