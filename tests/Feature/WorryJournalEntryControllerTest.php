<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\WorryJournalEntry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\TestCase;

class WorryJournalEntryControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testUserCanGetListOfWorryJournalEntries()
    {
        $user = $this->createUserWithWorryJournalEntries();

        $this->actingAs($user);

        $response = $this->getJson(route('worry-journal.index'));

        $response->assertStatus(Response::HTTP_OK)
            ->assertJsonCount($user->worryJournalEntries->count());
    }

    public function testUserCanCreateWorryJournalEntry()
    {
        $user = $this->createUser();

        $this->actingAs($user);

        $response = $this->postJson(route('worry-journal.store'), [
                'title' => 'Test Title',
                'main_worry' => 'Test Main Worry',
                'thinking_traps' => [1, 2],
                'balanced_thought' => 'Test Balanced Thought',
            ]);

        $response->assertStatus(Response::HTTP_OK)
            ->assertJson([
                'type' => 'success',
                'message' => 'Journal Entry Completed',
            ]);

       // Fetch the entry from the database
        $entry = WorryJournalEntry::where('title', 'Test Title')->first();

        // Convert the expected value to an array
        $expectedThinkingTraps = json_decode('["1","2"]', true);

        // Compare attributes directly
        $this->assertEquals('Test Title', $entry->title);
        $this->assertEquals('Test Main Worry', $entry->main_worry);
        $this->assertEquals($expectedThinkingTraps, json_decode($entry->thinking_traps, true));
        $this->assertEquals('Test Balanced Thought', $entry->balanced_thought);
    }

    public function testUserCanUpdateWorryJournalEntry()
    {
        $user = $this->createUserWithWorryJournalEntries();
        $entry = $user->worryJournalEntries->first();

        $this->actingAs($user);

        $response = $this->putJson(route('worry-journal.update', ['worryJournalEntry' => $entry->id]), [
            'title' => 'Test Title',
            'main_worry' => 'Test Main Worry',
            'thinking_traps' => [1, 2],
            'balanced_thought' => 'Test Balanced Thought',
        ]);

        $response->assertStatus(Response::HTTP_OK)
            ->assertJson([
                'type' => 'success',
                'message' => 'Journal Entry Updated',
            ]);
    }

    public function testUserCanDeleteWorryJournalEntry()
    {
        $user = $this->createUserWithWorryJournalEntries();
        $entry = $user->worryJournalEntries->first();

        $this->actingAs($user);

        $response = $this->deleteJson(route('worry-journal.destroy', ['worryJournalEntry' => $entry->id]));

        $response->assertStatus(Response::HTTP_OK)
            ->assertJson(['success' => 'Worry Journal Entry Deleted Successfully!']);

        $this->assertDatabaseMissing('worry_journal_entries', ['id' => $entry->id]);
    }

    // Helper methods

    private function createUser()
    {
        return User::factory()->create();
    }

    private function createUserWithWorryJournalEntries($count = 3)
    {
        $user = $this->createUser();
        WorryJournalEntry::factory($count)->create(['user_id' => $user->id]);

        return $user->refresh();
    }
}
