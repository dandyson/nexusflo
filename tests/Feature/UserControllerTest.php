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
    public function userCanUpdateDetails()
    {
        $user = User::factory()->create(['name' => 'Initial Name', 'email' => 'initial@email.com']);

        $response = $this->actingAs($user)
            ->postJson(route('user.update'), [
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
    public function deleteAccount()
    {
        $user = User::factory()->create();

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => $user->name,
        ]);

        $response = $this->actingAs($user)->delete(route('user.account.delete'));

        $response->assertJson([
            'type' => 'success',
            'message' => 'Account Deleted Successfully!',
        ]);

        $this->assertSoftDeleted('users', ['id' => $user->id]);
    }

    /** @test */
    public function userCanUpdatePassword()
    {
        $user = User::factory()->create(['password' => bcrypt('oldpassword')]);

        $response = $this->actingAs($user)
            ->postJson(route('user.update-password'), [
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
    public function userCannotUpdatePasswordWithIncorrectCurrentPassword()
    {
        $user = User::factory()->create(['password' => bcrypt('oldpassword')]);

        $response = $this->actingAs($user)
            ->postJson(route('user.update-password'), [
                'current_password' => 'wrongpassword',
                'password' => 'newpassword',
                'password_confirmation' => 'newpassword',
            ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['current_password']);

        $user->refresh();

        $this->assertTrue(Hash::check('oldpassword', $user->password));
    }

    /** @test */
    public function updateOnlyChangesTheLoggedInUser()
    {
        $otherUser = User::factory()->create([
            'name' => 'Other User',
            'email' => 'other@email.com',
        ]);

        $user = $this->authUser();

        $this->postJson(route('user.update'), [
            'name' => 'Updated Name',
            'email' => 'updated@email.com',
        ])->assertOk();

        // The logged-in user was updated
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => 'Updated Name',
            'email' => 'updated@email.com',
        ]);

        // the other user was left alone
        $this->assertDatabaseHas('users', [
            'id' => $otherUser->id,
            'name' => 'Other User',
            'email' => 'other@email.com',
        ]);
    }

    /** @test */
    public function guestCannotAccessUserRoutes()
    {
        $this->postJson(route('user.update'), [])->assertUnauthorized();
        $this->postJson(route('user.update-password'), [])->assertUnauthorized();
        $this->postJson(route('user.upload-avatar'), [])->assertUnauthorized();
        $this->deleteJson(route('user.account.delete'))->assertUnauthorized();
    }

    /**
     * @test
     */
    public function userCanUploadAvatarToLocalStorageAndNotS3()
    {
        // Mock storage
        Storage::fake('public');
        Storage::fake('s3');

        $user = User::factory()->create();

        // Simulate local environment
        config(['filesystems.default' => 'public']);

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->actingAs($user)->postJson(route('user.upload-avatar'), [
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

    /**
     * @test
     */
    public function userCanUploadAvatarToS3AndNotLocalStorage()
    {
        Storage::fake('s3');

        $user = User::factory()->create();

        // Set environment to production (simulation)
        config(['filesystems.default' => 's3']);

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->actingAs($user)->postJson(route('user.upload-avatar'), [
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
    public function userCannotUploadInvalidFile()
    {
        $user = User::factory()->create();

        Storage::fake('s3');
        $file = UploadedFile::fake()->create('document.pdf', 100); // Create a non-image file

        $response = $this->actingAs($user)->postJson(route('user.upload-avatar'), [
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
    public function userCannotUploadMoreThanLimit()
    {
        $user = User::factory()->create(['avatar_upload_count' => 10]);

        Storage::fake('s3');
        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->actingAs($user)->postJson(route('user.upload-avatar'), [
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
