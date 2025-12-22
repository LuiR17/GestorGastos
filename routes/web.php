<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpendController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CreditCardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('spends', SpendController::class);
Route::resource('accounts', AccountController::class);
Route::resource('creditcards', CreditCardController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
