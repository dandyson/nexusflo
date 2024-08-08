<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class RateLimitingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function person_avatar_upload_route_allows_requests_within_rate_limit()
    {
        $user = User::factory()->create();

        Storage::fake('s3');
        $file = UploadedFile::fake()->image('avatar.jpg');

        // Perform requests within the rate limit
        for ($i = 0; $i < 10; $i++) {
            $response = $this->actingAs($user)->postJson(route('user.upload-avatar', $user), [
                'avatar' => $file,
            ]);

            $response->assertStatus(200);
        }
    }

    /** @test */
    public function person_avatar_upload_route_blocks_requests_exceeding_rate_limit()
    {
        $user = User::factory()->create();

        Storage::fake('s3');
        $file = UploadedFile::fake()->image('avatar.jpg');

        // Perform requests within the rate limit
        for ($i = 0; $i < 10; $i++) {
            $response = $this->actingAs($user)->postJson(route('user.upload-avatar', $user), [
                'avatar' => $file,
            ]);

            $response->assertStatus(200);
        }

        // Try one more request which should be rate limited
        $response = $this->actingAs($user)->postJson(route('user.upload-avatar', $user), [
            'avatar' => $file,
        ]);

        $response->assertStatus(429);
    }
}
