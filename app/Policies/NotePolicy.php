<?php

namespace App\Policies;

use App\Models\Note;
use App\Models\Notebook;
use App\Models\User;

class NotePolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Note $note): bool
    {
        return $user->id === $note->notebook->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user, Notebook $notebook): bool
    {
        return $user->id === $notebook->user_id;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Note $note): bool
    {
        return $user->id === $note->notebook->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Note $note): bool
    {
        return $user->id === $note->notebook->user_id;
    }
}
