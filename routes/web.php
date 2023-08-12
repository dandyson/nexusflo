<?php

use App\Http\Controllers\WorryJournalController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app');
});

// JOURNALS
// Worry Journal
Route::prefix('/worry-journal')->group(function () {
    Route::get('/index', [WorryJournalController::class, 'index'])->name('worry-journal.index');
    Route::get('/create', [WorryJournalController::class, 'create'])->name('worry-journal.create');
    Route::get('/{worryJournalEntry}/edit', [WorryJournalController::class, 'edit'])->name('worry-journal.edit');
    Route::get('/{worryJournalEntry}/show', [WorryJournalController::class, 'show'])->name('worry-journal.show');
    Route::delete('/{worryJournalEntry}/destroy', [WorryJournalController::class, 'destroy'])->name('worry-journal.destroy');
});

// 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return view('app');
})->middleware(['auth', 'signed'])->name('verification.verify');

/** This is needed for Vue's 'createWebHistory' - so on refresh, the pages don't 404 - 
 * applied to all except api routes so the auth laravel fortify routes dont fail
 *  */ 
Route::get('{any}', function () {
    return view('app');
})->where('any', '^(?!api).*');