<?php

// app/Http/Controllers/NoteController.php
namespace App\Http\Controllers;

use App\Models\Notebook;
use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Validation\Rule;

class NoteController extends Controller
{
    public function index()
    {
        // Fetch all notes for the authenticated user
        $notes = auth()->user()->notes;

        return response()->json($notes);
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'id' => 'required|integer',
        ]);

        $notebook = Notebook::findOrFail($request->id);

        // Create a new note for the authenticated user
        $note = $notebook->notes()->create([
            'title' => 'New Note',
            'content' => 'Add Content Here',
        ]);

        return response()->json($note, 201);
    }

    public function update(Request $request, Note $note)
    {
        // Validate request
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
    
        // Update the note with the new data
        $note->update([
            'title' => $request->input('note.title'),
            'content' => $request->input('note.content'),
        ]);
    
        return response()->json($note);
    }

    public function destroy(Note $note)
    {
        // Check if the authenticated user owns the note
        if ($note->notebook->user_id !== auth()->id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Delete the note
        $note->delete();

        return response()->json(['message' => 'Note deleted'], 200);
    }
}

