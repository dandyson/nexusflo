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

    /**
     * @test
     */
    public function userCanGetListOfWorryJournalEntries()
    {
        $user = $this->authUser();

        // Create worry journal entries
        WorryJournalEntry::factory()->count(3)->create(['user_id' => $user->id]);

        $response = $this->getJson(route('worry-journal.index'));

        $response->assertStatus(Response::HTTP_OK)
            ->assertJsonCount($user->worryJournalEntries->count());
    }

    /**
     * @test
     */
    public function unauthorisedUserCannotGetListOfWorryJournalEntries()
    {
        $user = User::factory()->create();

        // Create worry journal entries
        WorryJournalEntry::factory()->count(3)->create(['user_id' => $user->id]);

        $response = $this->getJson(route('worry-journal.index'));

        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    /**
     * @test
     */
    public function userOnlySeesTheirOwnWorryJournalEntries()
    {
        $otherUser = User::factory()->create();
        WorryJournalEntry::factory()->count(3)->create(['user_id' => $otherUser->id]);

        $authUser = $this->authUser();
        WorryJournalEntry::factory()->count(2)->create(['user_id' => $authUser->id]);

        $this->getJson(route('worry-journal.index'))
            ->assertOk()
            ->assertJsonCount(2); // should only have the authUser entries
    }

    /**
     * @test
     */
    public function userCanCreateWorryJournalEntry()
    {
         $user = $this->authUser();

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

    /**
     * @test
     */
    public function userCanViewTheirWorryJournalEntry()
    {
        $user = $this->authUser();

         // Create worry journal entries
        WorryJournalEntry::factory()->count(3)->create(['user_id' => $user->id]);

        $entry = $user->worryJournalEntries->first();

        $response = $this->getJson(route('worry-journal.show', ['worryJournalEntry' => $entry->id]));

        $response->assertStatus(Response::HTTP_OK);
    }

    /**
     * @test
     */
    public function userCannotViewAnotherUsersWorryJournalEntry()
    {
        $authUser = $this->authUser();
        $otherUser = User::factory()->create();

         // Create worry journal entries
        WorryJournalEntry::factory()->count(3)->create(['user_id' => $otherUser->id]);

        $entry = $otherUser->worryJournalEntries->first();

        $response = $this->getJson(route('worry-journal.show', ['worryJournalEntry' => $entry->id]));

        $response->assertStatus(Response::HTTP_FORBIDDEN);
    }

    /**
     * @test
     */
    public function userCanUpdateWorryJournalEntry()
    {
         $user = $this->authUser();

         // Create worry journal entries
        WorryJournalEntry::factory()->count(3)->create(['user_id' => $user->id]);

        $entry = $user->worryJournalEntries->first();

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

    /**
     * @test
     */
    public function userCanDeleteWorryJournalEntry()
    {
        $user = $this->authUser();

        // Create worry journal entries
        WorryJournalEntry::factory()->count(3)->create(['user_id' => $user->id]);

        $entry = $user->worryJournalEntries->first();

        $response = $this->deleteJson(route('worry-journal.destroy', ['worryJournalEntry' => $entry->id]));

        $response->assertStatus(Response::HTTP_OK)
            ->assertJson(['success' => 'Worry Journal Entry Deleted Successfully!']);

        $this->assertDatabaseMissing('worry_journal_entries', ['id' => $entry->id]);
    }

    /**
     * @test
     */
    public function userCannotUpdateAnotherUsersWorryJournalEntry()
    {
        $this->authUser();
        $otherUser = User::factory()->create();

        $entry = WorryJournalEntry::factory()->create([
            'user_id' => $otherUser->id,
            'title' => 'Original Title',
        ]);

        $response = $this->putJson(route('worry-journal.update', ['worryJournalEntry' => $entry->id]), [
            'title' => 'Hacked Title',
            'main_worry' => 'Test Main Worry',
            'thinking_traps' => [1, 2],
            'balanced_thought' => 'Test Balanced Thought',
        ]);

        $response->assertStatus(Response::HTTP_FORBIDDEN);

        $this->assertDatabaseHas('worry_journal_entries', [
            'id' => $entry->id,
            'title' => 'Original Title',
        ]);
    }

    /**
     * @test
     */
    public function userCannotDeleteAnotherUsersWorryJournalEntry()
    {
        $this->authUser();
        $otherUser = User::factory()->create();

        $entry = WorryJournalEntry::factory()->create(['user_id' => $otherUser->id]);

        $response = $this->deleteJson(route('worry-journal.destroy', ['worryJournalEntry' => $entry->id]));

        $response->assertStatus(Response::HTTP_FORBIDDEN);

        $this->assertDatabaseHas('worry_journal_entries', ['id' => $entry->id]);
    }
}
