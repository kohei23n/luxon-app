<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;

// 業界研究
use App\Http\Controllers\Research\IndexController as ResearchIndex;
// 業界研究：業界別情報
use App\Http\Controllers\Research\Industry\IndexController as ResearchIndustryIndex;

// 予約
use App\Http\Controllers\Reserve\Interview\IndexController as ReserveInterviewIndex;

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
});

// マイページ
Route::middleware('auth')->group(function () {

    // 業界研究
    Route::get('/research', ResearchIndex::class)->name('research.index');
    // 業界研究：業界別情報
    Route::get('/research/industry/{id}', ResearchIndustryIndex::class)->name('research.industryIndex');

    // 予約：トップ
    Route::get('/reserve', function () {
        return view('reserve.index');
    })->name('reserve.index');
    // 予約：面談
    Route::get('/reserve/interview', ReserveInterviewIndex::class)->name('reserve.interviewIndex');

    // マイページトップ
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
});

require __DIR__ . '/auth.php';
