<?php

namespace App\Http\Controllers;

use App\Models\Notebook;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NotebookController extends Controller
{
    public function index(): JsonResponse
    {
        $notebooks = auth()->user()->notebooks()->with('notes')->get();

        return response()->json($notebooks);
    }

    public function store(): JsonResponse
    {
        $notebook = auth()->user()->notebooks()->create([
            'title' => 'New Notebook',
        ]);

        return response()->json($notebook, 201);
    }

    public function update(Request $request, Notebook $notebook): JsonResponse
    {
        $notebook = $request->user()->notebooks()->findOrFail($notebook->getKey());

        $request->validate([
            'title' => 'required|string',
        ]);

        $notebook->update([
            'title' => $request->title,
        ]);

        return response()->json($notebook);
    }

    public function destroy(Notebook $notebook): JsonResponse
    {
        $notebook = auth()->user()->notebooks()->findOrFail($notebook->getKey());

        $notebook->delete();

        return response()->json(['message' => 'Notebook deleted'], 200);
    }
}
