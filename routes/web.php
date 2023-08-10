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
 
    return view('verified');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('{any}', function () {
    return view('app');
})->where('any','.*');