<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;

// 業界研究
use App\Http\Controllers\Research\IndexController as ResearchIndex;

// マイページ
// トップ
use App\Http\Controllers\MyPage\IndexController as MyPageIndex;
// プラン
use App\Http\Controllers\MyPage\Plan\IndexController as MyPagePlanIndex;
// プラン：個人情報
use App\Http\Controllers\MyPage\Plan\Profile\UpdateController as MyPagePlanProfileUpdate;
use App\Http\Controllers\MyPage\Plan\Profile\DeleteController as MyPagePlanProfileDelete;
// 選考情報
use App\Http\Controllers\MyPage\Selection\IndexController as MyPageSelectionIndex;
use App\Http\Controllers\MyPage\Selection\CreateController as MyPageSelectionCreate;
use App\Http\Controllers\MyPage\Selection\UpdateController as MyPageSelectionUpdate;
// 個人情報
use App\Http\Controllers\Profile\UpdateController as ProfileUpdate;


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
    // トップ
    Route::get('/mypage', MyPageIndex::class)->name('mypage.index');
    // プラン
    Route::get('/mypage/plan', MyPagePlanIndex::class)->name('mypage.planIndex');
    // プラン：個人情報
    Route::get('/mypage/plan/pi/edit', [MyPagePlanProfileUpdate::class, 'edit'])->name('mypage.plan.profileEdit');
    Route::patch('/mypage/plan/pi/edit', [MyPagePlanProfileUpdate::class, 'update'])->name('mypage.plan.profileUpdate');
    // ここは後で直したい
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // 選考情報
    Route::get('/mypage/selection', MyPageSelectionIndex::class)->name('mypage.selectionIndex');
    Route::get('/mypage/selection/add', [MyPageSelectionCreate::class, 'add'])->name('mypage.selectionAdd');
    Route::post('/mypage/selection/add', [MyPageSelectionCreate::class, 'create'])->name('mypage.selectionCreate');
    Route::get('/mypage/selection/edit/{id}', [MyPageSelectionUpdate::class, 'edit'])->name('mypage.selectionEdit');
    Route::patch('/mypage/selection/edit/{id}', [MyPageSelectionUpdate::class, 'update'])->name('mypage.selectionUpdate');
    // 選考
});

// 予約
Route::get('/reserve', ReserveIndex::class)->name('reserve.index');

require __DIR__.'/auth.php';
