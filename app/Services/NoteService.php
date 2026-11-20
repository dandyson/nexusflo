<?php

namespace App\Services;

use App\Models\Note;
use App\Models\Notebook;
use App\Models\User;
use Illuminate\Support\Collection;

class NoteService
{
    public function getNotesForUser(User $user): Collection
    {
        return $user->notes;
    }

    public function createNote(Notebook $notebook): Note
    {
        $note = $notebook->notes()->create();

        return $note;
    }

    public function updateNote(Note $note, array $data): Note
    {
        $note->update($data);

        return $note;
    }

    public function deleteNote(Note $note): void
    {
        $note->delete();
    }
}
