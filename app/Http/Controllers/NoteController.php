<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Models\Note;
use App\Models\Notebook;
use App\Services\NoteService;
use Illuminate\Http\JsonResponse;

class NoteController extends Controller
{
    public function __construct(private NoteService $noteService) {}

    public function index(): JsonResponse
    {
        $notes = $this->noteService->getNotesForUser(auth()->user());

        return response()->json($notes);
    }

    public function store(StoreNoteRequest $request): JsonResponse
    {
        $notebook = Notebook::findOrFail($request->notebook_id);

        $this->authorize(
            'create',
            [Note::class, $notebook]
        );

        $note = $this->noteService->createNote($notebook);

        return response()->json($note, 201);
    }

    public function update(UpdateNoteRequest $request, Note $note): JsonResponse
    {
        $this->authorize('update', $note);

        $data = [
            'title' => $request->input('note.title'),
            'content' => $request->input('note.content'),
        ];

        $note = $this->noteService->updateNote($note, $data);

        return response()->json($note);
    }

    public function destroy(Note $note): JsonResponse
    {
        $this->authorize('delete', $note);

        $this->noteService->deleteNote($note);

        return response()->json(['message' => 'Note deleted'], 200);
    }
}
