<?php

namespace App\Policies;

use App\Models\User;
use App\Models\WorryJournalEntry;
use Illuminate\Auth\Access\Response;

class WorryJournalEntryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, WorryJournalEntry $worryJournalEntry): bool
    {
        return $user->id === $worryJournalEntry->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, WorryJournalEntry $worryJournalEntry): bool
    {
        return $user->id === $worryJournalEntry->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, WorryJournalEntry $worryJournalEntry): bool
    {
        return $user->id === $worryJournalEntry->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, WorryJournalEntry $worryJournalEntry): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, WorryJournalEntry $worryJournalEntry): bool
    {
        //
    }
}
