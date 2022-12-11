<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorryJournalEntryRequest;
use App\Models\ThinkingTraps;
use App\Models\WorryJournalEntry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WorryJournalController extends Controller
{
    public function getTraps(): JsonResponse
    {
        $thinkingTraps = ThinkingTraps::all()->makeHidden(['created_at', 'updated_at']);

        return response()->json([
            'thinkingTraps' => $thinkingTraps,
        ]);
    }

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

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'main_worry' => 'required',
            'balanced_thought' => 'required',
        ]);

        $worryJournalEntry = WorryJournalEntry::create($validated);

        // TODO: Need to add 'thinking traps' as a relation rather than a DB column, using a JSON column for now
        $worryJournalEntry->thinking_traps = json_encode($request->thinking_traps);

        $worryJournalEntry->save();

        return redirect()->route('worry-journal.index')->with(['worry' => $worryJournalEntry]);
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
