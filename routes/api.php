<?php

use App\Http\Controllers\Api\AiController;
use App\Http\Controllers\Api\PositiveNewsController;
use App\Http\Controllers\Api\QuoteController;
use App\Http\Controllers\Api\ThinkingTrapController;
use App\Http\Controllers\NotebookController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorryJournalEntryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    Route::get('user', function (Request $request) {
        return $request->user();
    });
    // Dashboard
    // Quotes
    Route::get('quotes', [QuoteController::class, 'index'])->name('quotes');
    // Notebooks
    Route::resource('notebooks', NotebookController::class)->except(['show'])
        ->names([
            'index' => 'notebooks.index',
            'store' => 'notebooks.store',
            'destroy' => 'notebooks.destroy',
        ]);
    // JOURNALS
    // Notes
    Route::resource('notes', NoteController::class)->except(['show'])
        ->names([
            'index' => 'notes.index',
            'store' => 'notes.store',
            'destroy' => 'notes.destroy',
        ]);
});

// PASSWORD RESET - To handle link from reset password email
Route::middleware('guest')->group(function () {
    Route::get('reset-password/{token}', function ($token) {
        $email = request()->query('email');

        return redirect("/auth/password-reset/{$token}?email={$email}");
    })->name('password.reset');
});

// Worry Journal
Route::resource('worry-journal', WorryJournalEntryController::class)->except(['show', 'update', 'destroy']);
// Separate routes instead of resource one for correct param name, as cannot use default 'worry-journal' in param in WorryJournal Vue component
Route::put('worry-journal/{worryJournalEntry}', [WorryJournalEntryController::class, 'update'])->name('worry-journal.update');
Route::get('worry-journal/{worryJournalEntry}', [WorryJournalEntryController::class, 'show'])->name('worry-journal.show');
Route::delete('worry-journal/{worryJournalEntry}', [WorryJournalEntryController::class, 'destroy'])->name('worry-journal.destroy');

// User
Route::post('users/{user}/update', [UserController::class, 'updateDetails'])->name('user.update');
Route::post('users/{user}/update-password', [UserController::class, 'updatePassword'])->name('user.update-password');
Route::middleware('throttle:10,1')->post('users/{user}/upload-avatar', [UserController::class, 'uploadAvatar'])->name('user.upload-avatar');

// Delete profile
Route::delete('users/{user}/delete', [UserController::class, 'deleteAccount'])->name('user.account.delete');

// Positive News
Route::get('positive-news-feed', [PositiveNewsController::class, 'newsFetch'])->name('news-fetch');

// Worry Journal
Route::get('thinking-traps', [ThinkingTrapController::class, 'index'])->name('index');
Route::prefix('worry-journal')->group(function () {
    Route::get('all-entries', [WorryJournalEntryController::class, 'getWorryJournalEntries'])->name('get-worry-journal-entries');
});

// AI: Worry Balancer
Route::post('worry-balancer', [AiController::class, 'fetchWorryBalanceResponse'])->name('worry-balancer');
