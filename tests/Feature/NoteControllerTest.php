<?php

namespace Tests\Feature;

use App\Models\Note;
use App\Models\Notebook;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\TestCase;

class NoteControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testUserCanGetListOfNotes()
    {
        $user = $this->createUserWithNotes();

        $response = $this->actingAs($user)->getJson(route('notes.index'));

        $response->assertStatus(Response::HTTP_OK)
            ->assertJsonCount($user->notes->count());
    }

    public function testUserCanCreateNote()
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

    public function testUserCanUpdateNote()
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

    public function testUserCanDeleteNote()
    {
        $user = $this->createUserWithNotes();
        $note = $user->notes->first();

        $response = $this->actingAs($user)->deleteJson(route('notes.destroy', ['note' => $note->id]));

        $response->assertStatus(Response::HTTP_OK)
            ->assertJson(['message' => 'Note deleted']);

        $this->assertDatabaseMissing('notes', ['id' => $note->id]);
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
        return \App\Models\User::factory()->create();
    }
}