<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;

// 業界研究
use App\Http\Controllers\Research\IndexController as ResearchIndex;

// マイページ
use App\Http\Controllers\Profile\IndexController as ProfileIndex;
// 個人情報
use App\Http\Controllers\Profile\UpdateController as ProfileUpdate;
// 選考
use App\Http\Controllers\Profile\Selection\CreateController as ProfileSelectionCreate;
use App\Http\Controllers\Profile\Selection\UpdateController as ProfileSelectionUpdate;

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

// 業界研究
Route::middleware('auth')->group(function () {
    Route::get('/research', ResearchIndex::class)->name('research.index');
});

// マイページ
Route::middleware('auth')->group(function () {
    Route::get('/profile', ProfileIndex::class)->name('profile.index');
    // 個人情報
    Route::get('/profile/edit', [ProfileUpdate::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileUpdate::class, 'update'])->name('profile.update');
    // ここは後で直したい
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // 選考
    Route::get('/profile/selection/add', [ProfileSelectionCreate::class, 'add'])->name('profile.selectionAdd');
    Route::post('/profile/selection/add', [ProfileSelectionCreate::class, 'create'])->name('profile.selectionCreate');
    Route::get('/profile/selection/edit/{id}', [ProfileSelectionUpdate::class, 'edit'])->name('profile.selectionEdit');
    Route::patch('/profile/selection/edit/{id}', [ProfileSelectionUpdate::class, 'update'])->name('profile.selectionUpdate');
});

// 予約
Route::get('/reserve', ReserveIndex::class)->name('reserve.index');

require __DIR__.'/auth.php';
