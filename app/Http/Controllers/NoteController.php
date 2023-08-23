<?php

// app/Http/Controllers/NoteController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

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
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'notebook_id' => 'required|exists:notebooks,id',
        ]);

        // Create a new note for the authenticated user
        $note = auth()->user()->notes()->create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'notebook_id' => $request->input('notebook_id'),
        ]);

        return response()->json($note, 201);
    }
}

