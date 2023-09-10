<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PositiveNewsController;
use App\Http\Controllers\NotebookController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\WorryJournalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\RoutePath;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    // Auth
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    // Notebooks
    Route::resource('notebooks', NotebookController::class)->except(['show'])
        ->names([
            'index' => 'notebooks.index',
            'store' => 'notebooks.store',
            'destroy' => 'notebooks.destroy',
        ]);
    // Notes
    Route::resource('notes', NoteController::class)->except(['show'])
        ->names([
            'index' => 'notes.index',
            'store' => 'notes.store',
            'destroy' => 'notes.destroy',
        ]);
    });

Route::get(RoutePath::for('password.reset', '/reset-password/{token}'), function($token) {
    return view('app');
})
    ->middleware(['guest:'.config('fortify.guard')])
    ->name('password.reset');

// Positive News
Route::get('/positive-news-feed', [PositiveNewsController::class, 'newsFetch'])->name('news-fetch');

// Thinking Traps
Route::prefix('/worry-journal')->group(function () {
    Route::get('/thinking-traps', [WorryJournalController::class, 'getTraps'])->name('index');
    Route::get('all-entries', [WorryJournalController::class, 'getWorryJournalEntries'])->name('get-worry-journal-entries');
});