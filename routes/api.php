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

    // Worry Journal
    Route::apiResource('worry-journal', WorryJournalEntryController::class)
        ->parameters(['worry-journal' => 'worryJournalEntry']);

    // User
    Route::post('users/update', [UserController::class, 'updateDetails'])->name('user.update');
    Route::post('users/update-password', [UserController::class, 'updatePassword'])->name('user.update-password');
    Route::middleware('throttle:10,1')->post('users/upload-avatar', [UserController::class, 'uploadAvatar'])->name('user.upload-avatar');

    // Delete profile
    Route::delete('users/delete', [UserController::class, 'deleteAccount'])->name('user.account.delete');

    // Positive News
    Route::get('positive-news-feed', [PositiveNewsController::class, 'newsFetch'])->name('news-fetch');

    // AI: Worry Balancer
    Route::middleware('throttle:5,1')->post('worry-balancer', [AiController::class, 'fetchWorryBalanceResponse'])->name('worry-balancer');
});

Route::get('thinking-traps', [ThinkingTrapController::class, 'index'])->name('thinking-traps.index');

// PASSWORD RESET - To handle link from reset password email
Route::middleware('guest')->group(function () {
    Route::get('reset-password/{token}', function ($token) {
        $email = request()->query('email');

        return redirect("/auth/password-reset/{$token}?email={$email}");
    })->name('password.reset');
});
