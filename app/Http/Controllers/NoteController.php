<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Models\Note;
use App\Models\Notebook;
use Illuminate\Http\JsonResponse;

class NoteController extends Controller
{
    public function index(): JsonResponse
    {
        $notes = auth()->user()->notes;

        return response()->json($notes);
    }

    public function store(StoreNoteRequest $request): JsonResponse
    {
        $notebook = Notebook::findOrFail($request->notebook_id);

        $this->authorize(
            'create',
            [Note::class, $notebook]
        );

        $note = $notebook->notes()->create();

        return response()->json($note, 201);
    }

    public function update(UpdateNoteRequest $request, Note $note): JsonResponse
    {
        $this->authorize('update', $note);

        $note->update([
            'title' => $request->input('note.title'),
            'content' => $request->input('note.content'),
        ]);

        return response()->json($note);
    }

    public function destroy(Note $note): JsonResponse
    {
        $this->authorize('delete', $note);

        $note->delete();

        return response()->json(['message' => 'Note deleted'], 200);
    }
}
