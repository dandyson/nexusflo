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

        $response = $this->post('/api/forgot-password', ['email' => $user->email]);

        Notification::assertSentTo($user, ResetPassword::class);
    }

    /** @test */
    public function password_can_be_reset_with_valid_token()
    {
        Notification::fake();

        $user = User::factory()->create();

        $this->post('/api/forgot-password', ['email' => $user->email]);

        Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user) {
            $response = $this->post('/api/reset-password', [
                'token' => $notification->token,
                'email' => $user->email,
                'password' => 'new-password',
                'password_confirmation' => 'new-password',
            ]);

            $response->assertSessionHasNoErrors();

            $this->assertTrue(Hash::check('new-password', $user->fresh()->password));

            return true;
        });
    }
}
