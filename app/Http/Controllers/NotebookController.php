<?php

// app/Http/Controllers/NotebookController.php
namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Notebook;

class NotebookController extends Controller
{
    public function index()
    {
        // Fetch all notebooks for the authenticated user
        $notebooks = auth()->user()->notebooks()->with('notes')->get();
        return response()->json($notebooks);
    }

    public function store()
    {
        // Create a new notebook for the authenticated user
        $notebook = auth()->user()->notebooks()->create([
            'title' => 'New Notebook',
        ]);

        return response()->json($notebook, 201);
    }

    public function update(Request $request, Notebook $notebook)
    {
        // Validate request
        $request->validate([
            'title' => 'required|string',
        ]);
    
        // Update the note with the new data
        $notebook->update([
            'title' => $request->title,
        ]);
    
        return response()->json($notebook);
    }

    public function destroy(Notebook $notebook)
    {
        // Check if the authenticated user owns the note
        if ($notebook->user_id !== auth()->id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Delete the note
        $notebook->delete();

        return response()->json(['message' => 'Notebook deleted'], 200);
    }
}

