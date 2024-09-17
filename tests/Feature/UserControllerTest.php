<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_user_can_update_details()
    {
        $user = User::factory()->create(['name' => 'Initial Name', 'email' => 'initial@email.com']);

        $response = $this->actingAs($user)
            ->postJson(route('user.update', $user), [
                'name' => 'Updated Name',
                'email' => 'updated@email.com',
                'avatar' => null,
            ]);

        $response->assertStatus(200)
            ->assertJson([
                'type' => 'success',
                'message' => 'Details Updated Successfully!',
            ]);

        $user->refresh();

        $this->assertSame('Updated Name', $user->name);
        $this->assertSame('updated@email.com', $user->email);
    }

    /** @test */
    public function delete_account()
    {
        $user = User::factory()->create();

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => $user->name,
        ]);

        $response = $this->actingAs($user)->delete(route('user.account.delete', ['user' => $user->id]));

        $response->assertJson([
            'type' => 'success',
            'message' => 'Account Deleted Successfully!',
        ]);

        $this->assertSoftDeleted('users', ['id' => $user->id]);
    }

    /** @test */
    public function test_user_can_update_password()
    {
        $user = User::factory()->create(['password' => bcrypt('oldpassword')]);

        $response = $this->actingAs($user)
            ->postJson(route('user.update-password', $user), [
                'current_password' => 'oldpassword',
                'password' => 'newpassword',
                'password_confirmation' => 'newpassword',
            ]);

        $response->assertStatus(200)
            ->assertJson([
                'type' => 'success',
                'message' => 'Password Updated Successfully!',
            ]);

        $user->refresh();

        $this->assertTrue(Hash::check('newpassword', $user->password));
    }

    /** @test */
    public function test_user_cannot_update_password_with_incorrect_current_password()
    {
        $user = User::factory()->create(['password' => bcrypt('oldpassword')]);

        $response = $this->actingAs($user)
            ->postJson(route('user.update-password', $user), [
                'current_password' => 'wrongpassword',
                'password' => 'newpassword',
                'password_confirmation' => 'newpassword',
            ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['current_password']);

        $user->refresh();

        $this->assertTrue(Hash::check('oldpassword', $user->password));
    }

    public function test_user_can_upload_avatar_to_local_storage_and_not_s3()
    {
        Storage::fake('public');

        $user = User::factory()->create();

        // Set environment to local (simulation)
        config(['filesystems.default' => 'public']);

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->actingAs($user)->postJson(route('user.upload-avatar', $user), [
            'avatar' => $file,
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Image uploaded successfully',
            ]);

        $user->refresh();
        $this->assertNotNull($user->avatar);
        $this->assertEquals(1, $user->avatar_upload_count);

        $avatarPath = "users/{$user->id}/avatar/{$file->getClientOriginalName()}";

        Storage::disk('public')->assertExists($avatarPath);

        // Assert no requests were made to S3
        Storage::disk('s3')->assertMissing($avatarPath);
    }

    public function test_user_can_upload_avatar_to_s3_and_not_local_storage()
    {
        Storage::fake('s3');

        $user = User::factory()->create();

        // Set environment to production (simulation)
        config(['filesystems.default' => 's3']);

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->actingAs($user)->postJson(route('user.upload-avatar', $user), [
            'avatar' => $file,
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Image uploaded successfully',
            ]);

        $user->refresh();
        $this->assertNotNull($user->avatar);
        $this->assertEquals(1, $user->avatar_upload_count);

        $avatarPath = "users/{$user->id}/avatar/{$file->getClientOriginalName()}";

        Storage::disk('s3')->assertExists($avatarPath);

        // Assert no files exist in the local (public) storage
        Storage::disk('public')->assertMissing($avatarPath);
    }

    /** @test */
    public function user_cannot_upload_invalid_file()
    {
        $user = User::factory()->create();

        Storage::fake('s3');
        $file = UploadedFile::fake()->create('document.pdf', 100); // Create a non-image file

        $response = $this->actingAs($user)->postJson(route('user.upload-avatar', $user), [
            'avatar' => $file,
        ]);

        $response->assertStatus(422)
            ->assertJson([
                'message' => 'The avatar must be an image. (and 1 more error)',
                'errors' => [
                    'avatar' => [
                        'The avatar must be an image.',
                        'The avatar must be a file of type: jpeg, png, jpg.',
                    ],
                ],
            ]);

        $user->refresh();
        $this->assertNull($user->avatar);
        $this->assertEquals(0, $user->avatar_upload_count);

        Storage::disk('s3')->assertMissing("users/{$user->id}/avatar/{$file->getClientOriginalName()}");
    }

    /** @test */
    public function test_user_cannot_upload_more_than_limit()
    {
        $user = User::factory()->create(['avatar_upload_count' => 10]);

        Storage::fake('s3');
        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->actingAs($user)->postJson(route('user.upload-avatar', $user), [
            'avatar' => $file,
        ]);

        $response->assertStatus(403)
            ->assertJson([
                'error' => 'Error: Upload limit reached. Please contact the admin team to resolve.',
            ]);

        $user->refresh();
        $this->assertEquals(10, $user->avatar_upload_count);

        Storage::disk('s3')->assertMissing("users/{$user->id}/avatar/{$file->getClientOriginalName()}");
    }
}
