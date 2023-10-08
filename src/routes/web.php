<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;

// マイページ
use App\Http\Controllers\Profile\IndexController as ProfileIndex;

// 予約
use App\Http\Controllers\Reserve\IndexController as ReserveIndex;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', IndexController::class)->middleware(['auth', 'verified'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// マイページ
Route::middleware('auth')->group(function () {
    Route::get('/profile', ProfileIndex::class)->name('profile.index');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 予約
Route::get('/reserve', ReserveIndex::class)->name('reserve.index');

require __DIR__.'/auth.php';
