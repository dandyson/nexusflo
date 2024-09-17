<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function reset_password_link_screen_can_be_rendered()
    {
        $response = $this->get('/auth/password-reminder');
        $response->assertStatus(200);
    }

    /** @test */
    public function reset_password_link_can_be_requested()
    {
        Notification::fake();
        $user = User::factory()->create();

        // Make a request to initialize the session
        $this->get('/sanctum/csrf-cookie');

        $response = $this->post('/api/forgot-password', [
            'email' => $user->email,
            '_token' => csrf_token(),
        ]);

        Notification::assertSentTo($user, ResetPassword::class);
    }

    /** @test */
    public function password_can_be_reset_with_valid_token()
    {
        Notification::fake();

        // Make a request to initialize the session
        $this->get('/sanctum/csrf-cookie');

        // Create a user
        $user = User::factory()->create();

        // Request a password reset link
        $response = $this->post('/api/forgot-password', [
            'email' => $user->email,
            '_token' => csrf_token(),
        ]);

        // Assert that the password reset notification was sent
        Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user) {
            // re-request sanctum token to initialize the session
            $this->get('/sanctum/csrf-cookie');

            // Use the token from the notification to reset the password as well as the csrf
            $response = $this->post('/api/reset-password', [
                'token' => $notification->token,
                '_token' => csrf_token(),
                'email' => $user->email,
                'password' => 'new-password',
                'password_confirmation' => 'new-password',
            ]);

            // Check that there are no session errors
            $response->assertSessionHasNoErrors();

            // Verify that the user's password was updated correctly
            $user = User::where('email', $user->email)->first(); // Reload the user
            $this->assertTrue(Hash::check('new-password', $user->password));

            return true;
        });
    }
}
