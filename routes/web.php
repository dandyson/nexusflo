<?php

use App\Http\Controllers\WorryJournalEntryController;
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