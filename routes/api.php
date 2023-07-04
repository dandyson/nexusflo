<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PositiveNewsController;
use App\Http\Controllers\WorryJournalController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Auth
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Positive News
Route::get('/positive-news-feed', [PositiveNewsController::class, 'newsFetch'])->name('news-fetch');

// Thinking Traps
Route::prefix('/worry-journal')->group(function () {
    Route::get('/thinking-traps', [WorryJournalController::class, 'getTraps'])->name('get-traps');
    Route::get('all-entries', [WorryJournalController::class, 'getWorryJournalEntries'])->name('get-worry-journal-entries');
});