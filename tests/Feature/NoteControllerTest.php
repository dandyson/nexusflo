<?php

namespace Tests\Feature;

use App\Models\Note;
use App\Models\Notebook;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\TestCase;

class NoteControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function userCanGetListOfNotes()
    {
        $user = $this->authUser();
        Notebook::factory()->create(['user_id' => $user->id]);
        Note::factory()->count(3)->create(['notebook_id' => $user->notebooks->first()->id]);

        $response = $this->getJson(route('notes.index'));

        $response->assertStatus(Response::HTTP_OK)
            ->assertJsonCount($user->notes->count());
    }

    /**
     * @test
     */
    public function guestCannotGetListOfNotes()
    {
        $response = $this->getJson(route('notes.index'));

        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /**
     * @test
     */
    public function userCanCreateNote()
    {
        $user = $this->authUser();

        Notebook::factory()->create(['user_id' => $user->id]);

        $response = $this->postJson(route('notes.store'), ['notebook_id' => $user->notebooks->first()->id]);

        $response->assertStatus(Response::HTTP_CREATED);

        $this->assertDatabaseHas('notes', [
            'title' => 'New Note',
            'content' => 'Add content here...',
            'notebook_id' => $user->notebooks->first()->id,
        ]);
    }

    /**
     * @test
     */
    public function userCannotCreateNoteInAnotherUsersNotebook()
    {
        $user = $this->authUser();
        $otherUser = User::factory()->create();

        Notebook::factory()->create(['user_id' => $otherUser->id]);

        $response = $this->postJson(route('notes.store'), ['notebook_id' => $otherUser->notebooks->first()->id]);

        $response->assertStatus(Response::HTTP_FORBIDDEN);

        $this->assertDatabaseCount('notes', 0);
    }

    /**
     * @test
     */
    public function userCanUpdateNote()
    {
        $user = $this->authUser();
        Notebook::factory()->create(['user_id' => $user->id]);
        Note::factory()->count(3)->create(['notebook_id' => $user->notebooks->first()->id]);

        $note = $user->notes->first();

        $response = $this->putJson(route('notes.update', ['note' => $note->id]), [
            'note' => [
                'id' => $note->id,
                'title' => 'Updated Title',
                'content' => 'Updated Content',
            ],
        ]);

        $response->assertStatus(Response::HTTP_OK)
            ->assertJson([
                'id' => $note->id,
                'title' => 'Updated Title',
                'content' => 'Updated Content',
            ]);
    }

    /**
     * @test
     */
    public function userCannotUpdateNoteBelongingToAnotherUser()
    {
        $user = $this->authUser();
        $otherUser = User::factory()->create();

        Notebook::factory()->create(['user_id' => $otherUser->id]);
        Note::factory()->count(3)->create(['notebook_id' => $otherUser->notebooks->first()->id]);

        $note = $otherUser->notes->first();

        $response = $this->putJson(route('notes.update', ['note' => $note->id]), [
            'note' => [
                'id' => $note->id,
                'title' => 'Updated Title',
                'content' => 'Updated Content',
            ],
        ]);

        $response->assertStatus(Response::HTTP_FORBIDDEN);

        $this->assertDatabaseHas('notes', [
            'id' => $note->id,
            'title' => $note->title,
            'content' => $note->content,
        ]);
    }

    /**
     * @test
     */
    public function userCanDeleteNote()
    {
        $user = $this->authUser();
        Notebook::factory()->create(['user_id' => $user->id]);
        Note::factory()->count(3)->create(['notebook_id' => $user->notebooks->first()->id]);
        $note = $user->notes->first();

        $response = $this->deleteJson(route('notes.destroy', ['note' => $note->id]));

        $response->assertStatus(Response::HTTP_OK)
            ->assertJson(['message' => 'Note deleted']);

        $this->assertDatabaseMissing('notes', ['id' => $note->id]);
    }

    /**
     * @test
     */
    public function userCannotDeleteNoteBelongingToAnotherUser()
    {
        $user = $this->authUser();
        $otherUser = User::factory()->create();

        Notebook::factory()->create(['user_id' => $otherUser->id]);
        Note::factory()->count(3)->create(['notebook_id' => $otherUser->notebooks->first()->id]);
        $note = $otherUser->notes->first();

        $response = $this->deleteJson(route('notes.destroy', ['note' => $note->id]));

        $response->assertStatus(Response::HTTP_FORBIDDEN);

        $this->assertDatabaseHas('notes', ['id' => $note->id]);
    }
}
