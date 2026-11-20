<?php

namespace App\Services;

use App\Models\Notebook;
use App\Models\User;
use Illuminate\Support\Collection;

class NotebookService
{
    public function getNotebooksForUser(User $user): Collection
    {
        return $user->notebooks()->with('notes')->get();
    }

    public function createNotebookForUser(User $user): Notebook
    {
        $notebook = $user->notebooks()->create([
            'title' => 'New Notebook',
        ]);

        return $notebook;
    }

    public function updateNotebook(Notebook $notebook, array $data): Notebook
    {
        $notebook->update($data);

        return $notebook;
    }

    public function deleteNotebook(Notebook $notebook): void
    {
        $notebook->delete();
    }
}
