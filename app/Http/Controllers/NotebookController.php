<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Notebook;

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
    if ($notebook->user_id !== auth()->id()) {
      return response()->json(['message' => 'Unauthorized'], 403);
    }
  
    $notebook->delete();

    return response()->json(['message' => 'Notebook deleted'], 200);
  }
}

