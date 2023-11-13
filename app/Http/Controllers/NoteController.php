<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Notebook;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NoteController extends Controller
{
    public function index(): JsonResponse
    {
        $notes = auth()->user()->notes;

        return response()->json($notes);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'id' => 'required|integer',
        ]);

        $notebook = Notebook::findOrFail($request->id);

        $note = $notebook->notes()->create([
            'title' => 'New Note',
            'content' => 'Add Content Here',
        ]);

        return response()->json($note, 201);
    }

    public function update(Request $request, Note $note): JsonResponse
    {
        $request->validate([
            'note' => 'required|array',
            'note.id' => [
                'required',
                'integer',
                Rule::exists('notes', 'id')->where(function ($query) use ($note) {
                    return $query->where('id', $note->id);
                }),
            ],
            'note.title' => 'required|string',
            'note.content' => 'required|string',
        ]);

        $note->update([
            'title' => $request->input('note.title'),
            'content' => $request->input('note.content'),
        ]);

        return response()->json($note);
    }

    public function destroy(Note $note): JsonResponse
    {
        if ($note->notebook->user_id !== auth()->id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $note->delete();

        return response()->json(['message' => 'Note deleted'], 200);
    }
}
