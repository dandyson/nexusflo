<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateNotebookRequest;
use App\Models\Notebook;
use App\Services\NotebookService;
use Illuminate\Http\JsonResponse;

class NotebookController extends Controller
{
    public function __construct(private NotebookService $notebookService)
    {
    }

    public function index(): JsonResponse
    {
        $notebooks = $this->notebookService->getNotebooksForUser(auth()->user());

        return response()->json($notebooks);
    }

    public function store(): JsonResponse
    {
        $notebook = $this->notebookService->createNotebookForUser(auth()->user());

        return response()->json($notebook, 201);
    }

    public function update(UpdateNotebookRequest $request, Notebook $notebook): JsonResponse
    {
        $this->authorize('update', $notebook);

        $this->notebookService->updateNotebook($notebook, $request->validated());

        return response()->json($notebook);
    }

    public function destroy(Notebook $notebook): JsonResponse
    {
        $this->authorize('delete', $notebook);

        $this->notebookService->deleteNotebook($notebook);

        return response()->json(['message' => 'Notebook deleted'], 200);
    }
}
