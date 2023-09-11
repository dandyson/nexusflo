<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorryJournalEntryRequest;
use App\Models\ThinkingTraps;
use App\Models\WorryJournalEntry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WorryJournalEntryController extends Controller
{

    public function getWorryJournalEntries(): JsonResponse
    {
        $worryJournalEntries = WorryJournalEntry::all();

        return response()->json([
            'worryJournalEntries' => $worryJournalEntries,
        ]);
    }

    public function index()
    {
        $worryJournalEntries = WorryJournalEntry::all();
        return view('worryJournal.index')
            ->with('worryJournalEntries', $worryJournalEntries);
    }

    public function show(WorryJournalEntry $worryJournalEntry)
    {
        return view('worryJournal.show')
            ->with('worryJournalEntry', $worryJournalEntry);
    }

    public function create()
    {
        $thinkingTraps = ThinkingTraps::all()->makeHidden(['created_at', 'updated_at']);
        
        return view('worryJournal.create')
            ->with(['thinkingTraps' => $thinkingTraps]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'main_worry' => 'required|string',
            'thinking_traps' => 'required|array',
            'balanced_thought' => 'required|string',
        ]);

        $worryJournalEntry = WorryJournalEntry::create([
            'user_id' => auth()->user()->id,
            'main_worry' => $validated['main_worry'],
            'thinking_traps' => json_encode($validated['thinking_traps']),
            'balanced_thought' => $validated['balanced_thought'],
        ]);

        $worryJournalEntry->save();

        return response()->json(['type' => 'success', 'message' => 'Journal Entry Completed', $worryJournalEntry]);
    }

    public function update()
    {
        dd("UPDATE");
    }

    public function destroy(WorryJournalEntry $worryJournalEntry): JsonResponse
    {
        $worryJournalEntry->delete();

        return response()->json([
            'success' => 'Worry Journal Entry Deleted Successfully!',
        ]);
    }
}
