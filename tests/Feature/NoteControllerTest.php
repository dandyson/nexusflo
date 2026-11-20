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
        $user = $this->createUserWithNotes();

        $response = $this->actingAs($user)->getJson(route('notes.index'));

        $response->assertStatus(Response::HTTP_OK)
            ->assertJsonCount($user->notes->count());
    }

    /**
     * @test
     */
    public function userCanCreateNote()
    {
        $user = $this->createUserWithNotebook();

        $response = $this->actingAs($user)->postJson(route('notes.store'), ['id' => $user->notebooks->first()->id]);

        $response->assertStatus(Response::HTTP_CREATED);

        $this->assertDatabaseHas('notes', [
            'title' => 'New Note',
            'content' => 'Add Content Here',
            'notebook_id' => $user->notebooks->first()->id,
        ]);
    }

    /**
     * @test
     */
    public function userCanUpdateNote()
    {
        $user = $this->createUserWithNotes();
        $note = $user->notes->first();

        $response = $this->actingAs($user)->putJson(route('notes.update', ['note' => $note->id]), [
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
    public function userCanDeleteNote()
    {
        $user = $this->createUserWithNotes();
        $note = $user->notes->first();

        $response = $this->actingAs($user)->deleteJson(route('notes.destroy', ['note' => $note->id]));

        $response->assertStatus(Response::HTTP_OK)
            ->assertJson(['message' => 'Note deleted']);

        $this->assertDatabaseMissing('notes', ['id' => $note->id]);
    }

    /** @test */
    public function user_cannot_create_or_change_notes_in_another_users_notebook()
    {
        $owner = $this->createUserWithNotes(1);
        $notebook = $owner->notebooks->first();
        $note = $owner->notes->first();
        $otherUser = $this->createUser();
        $this->actingAs($otherUser);

        $this->postJson(route('notes.store'), ['id' => $notebook->id])->assertNotFound();
        $this->putJson(route('notes.update', ['note' => $note->id]), [
            'note' => [
                'id' => $note->id,
                'title' => 'Changed title',
                'content' => 'Changed content',
            ],
        ])->assertNotFound();
        $this->deleteJson(route('notes.destroy', ['note' => $note->id]))->assertNotFound();

        $this->assertDatabaseHas('notes', [
            'id' => $note->id,
            'notebook_id' => $notebook->id,
            'title' => $note->title,
        ]);
    }

    // Helper methods

    private function createUserWithNotes($count = 3)
    {
        $user = $this->createUserWithNotebook();
        Note::factory($count)->create(['notebook_id' => $user->notebooks->first()->id]);

        return $user->refresh();
    }

    private function createUserWithNotebook()
    {
        $user = $this->createUser();
        Notebook::factory()->create(['user_id' => $user->id]);

        return $user->refresh();
    }

    private function createUser()
    {
        return User::factory()->create();
    }
}
