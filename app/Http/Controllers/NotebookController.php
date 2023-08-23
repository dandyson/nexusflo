<?php

// app/Http/Controllers/NotebookController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notebook;

class NotebookController extends Controller
{
    public function index()
    {
        // Fetch all notebooks for the authenticated user
        $notebooks = auth()->user()->notebooks;

        return response()->json($notebooks);
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Create a new notebook for the authenticated user
        $notebook = auth()->user()->notebooks()->create([
            'title' => $request->input('title'),
        ]);

        return response()->json($notebook, 201);
    }
}

