<?php

namespace Tests\Feature;

use App\Models\Notebook;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\TestCase;

class NotebookControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function userCanGetNotebooks()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->getJson(route('notebooks.index'));

        $response->assertStatus(200)
            ->assertJsonStructure([
                '*' => ['id', 'title', 'created_at', 'updated_at', 'notes'],
            ]);
    }

    /**
     * @test
     */
    public function guestCannotGetListOfNotebooks()
    {
        $response = $this->getJson(route('notes.index'));

        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /**
     * @test
     */
    public function userOnlySeesTheirOwnNotebooks()
    {
        $user = $this->authUser();
        $otherUser = User::factory()->create();

        Notebook::factory()->count(2)->create(['user_id' => $user->id]);
        Notebook::factory()->count(3)->create(['user_id' => $otherUser->id]);

        $this->getJson(route('notebooks.index'))
            ->assertOk()
            ->assertJsonCount(2);
    }

    /** @test */
    public function userCanCreateNotebook()
    {
        $user = $this->authUser();

        $response = $this->postJson(route('notebooks.store'));

        $response->assertStatus(201)
            ->assertJsonStructure(['id', 'title', 'created_at', 'updated_at']);

        $this->assertDatabaseHas('notebooks', [
            'user_id' => $user->id,
            'title' => 'New Notebook',
        ]);
    }

    /** @test */
    public function userCanUpdateNotebook()
    {
        $user = $this->authUser();

        $notebook = Notebook::factory()->create(['user_id' => $user->id]);

        $response = $this->putJson(route('notebooks.update', $notebook), [
            'title' => 'Updated Notebook',
        ]);

        $response->assertStatus(200)
            ->assertJson(['title' => 'Updated Notebook']);

        $this->assertDatabaseHas('notebooks', [
            'id' => $notebook->id,
            'title' => 'Updated Notebook',
        ]);
    }

    /** @test */
    public function userCannotUpdateAnotherUsersNotebook()
    {
        $user = $this->authUser();
        $otherUser = User::factory()->create();

        $notebook = Notebook::factory()->create([
            'user_id' => $otherUser->id,
            'title' => 'Test Notebook',
        ]);

        $response = $this->putJson(route('notebooks.update', $notebook), [
            'title' => 'Updated Notebook',
        ]);

        $response->assertStatus(Response::HTTP_FORBIDDEN);

        $this->assertDatabaseHas('notebooks', [
            'id' => $notebook->id,
            'title' => $notebook->title,
        ]);
    }

    /** @test */
    public function userCanDeleteNotebook()
    {
        $user = $this->authUser();

        $notebook = Notebook::factory()->create(['user_id' => $user->id]);

        $response = $this->deleteJson(route('notebooks.destroy', $notebook));

        $response->assertStatus(200)
            ->assertJson(['message' => 'Notebook deleted']);

        $this->assertDatabaseMissing('notebooks', ['id' => $notebook->id]);
    }

    /** @test */
    public function userCannotDeleteAnotherUsersNotebook()
    {
        $user = $this->authUser();
        $otherUser = User::factory()->create();

        $notebook = Notebook::factory()->create(['user_id' => $otherUser->id]);

        $response = $this->deleteJson(route('notebooks.destroy', $notebook));

        $response->assertStatus(Response::HTTP_FORBIDDEN);

        $this->assertDatabaseHas('notebooks', ['id' => $notebook->id]);
    }
}
