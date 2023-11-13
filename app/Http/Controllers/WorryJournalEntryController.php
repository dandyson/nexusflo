<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorryJournalEntryRequest;
use App\Models\ThinkingTraps;
use App\Models\WorryJournalEntry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WorryJournalEntryController extends Controller
{

  public function index(): JsonResponse
  {
    $worryJournalEntries = auth()->user()->worryjournalentries;
    return response()->json($worryJournalEntries);
  }

  public function show(WorryJournalEntry $worryJournalEntry): JsonResponse
  {
    return response()->json($worryJournalEntry);
  }

  public function create(): View
  {
    $thinkingTraps = ThinkingTraps::all()->makeHidden(['created_at', 'updated_at']);

    return view('worryJournal.create')
      ->with(['thinkingTraps' => $thinkingTraps]);
  }

  public function store(Request $request): JsonResponse
  {
    $validated = $request->validate([
      'title' => 'required|string',
      'main_worry' => 'required|string',
      'thinking_traps' => 'required|array',
      'balanced_thought' => 'required|string',
    ]);

    $worryJournalEntry = WorryJournalEntry::create([
      'user_id' => auth()->user()->id,
      'title' => $validated['title'],
      'main_worry' => $validated['main_worry'],
      'thinking_traps' => json_encode($validated['thinking_traps']),
      'balanced_thought' => $validated['balanced_thought'],
    ]);

    $worryJournalEntry->save();

    return response()->json(['type' => 'success', 'message' => 'Journal Entry Completed', $worryJournalEntry]);
  }

  public function update(Request $request, WorryJournalEntry $worryJournalEntry): JsonResponse
  {
    $validated = $request->validate([
      'title' => 'required|string',
      'main_worry' => 'required|string',
      'thinking_traps' => 'required|array',
      'balanced_thought' => 'required|string',
    ]);

    // Update the attributes of the existing entry
    $worryJournalEntry->title = $validated['title'];
    $worryJournalEntry->main_worry = $validated['main_worry'];
    $worryJournalEntry->thinking_traps = json_encode($validated['thinking_traps']);
    $worryJournalEntry->balanced_thought = $validated['balanced_thought'];

    // Save the changes to the database
    $worryJournalEntry->save();

    return response()->json(['type' => 'success', 'message' => 'Journal Entry Updated', 'entry' => $worryJournalEntry]);
  }

  public function destroy(WorryJournalEntry $worryJournalEntry): JsonResponse
  {
    $worryJournalEntry->delete();

    return response()->json([
      'success' => 'Worry Journal Entry Deleted Successfully!',
    ]);
  }
}
