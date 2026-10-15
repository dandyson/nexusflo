<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateNotebookRequest;
use App\Models\Notebook;
use Illuminate\Http\JsonResponse;

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

    public function update(UpdateNotebookRequest $request, Notebook $notebook): JsonResponse
    {
        $this->authorize('update', $notebook);

        $notebook->update($request->validated());

        return response()->json($notebook);
    }

    public function destroy(Notebook $notebook): JsonResponse
    {
        $this->authorize('delete', $notebook);

        $notebook->delete();

        return response()->json(['message' => 'Notebook deleted'], 200);
    }
}
