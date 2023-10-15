<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;

// 業界研究
use App\Http\Controllers\Research\IndexController as ResearchIndex;
// 業界研究：業界別会社情報
use App\Http\Controllers\Research\Companies\IndexController as ResearchCompaniesIndex;
// 業界研究：選考情報
use App\Http\Controllers\Research\Selections\IndexController as ResearchSelectionsIndex;
use App\Http\Controllers\Research\Selections\CreateController as ResearchSelectionsCreate;

// 予約
use App\Http\Controllers\Reserve\IndexController as ReserveIndex;
// 予約：面談
use App\Http\Controllers\Reserve\Interview\IndexController as ReserveInterviewIndex;
// 予約：イベント
use App\Http\Controllers\Reserve\Event\IndexController as ReserveEventIndex;
use App\Http\Controllers\Reserve\Event\ShowController as ReserveEventShow;
use App\Http\Controllers\Reserve\Event\CreateController as ReserveEventCreate;
// 予約：ES
use App\Http\Controllers\Reserve\Es\CreateController as ReserveEsCreate;
// 予約：ケース
use App\Http\Controllers\Reserve\Case\CreateController as ReserveCaseCreate;
// 予約：チケット追加
use App\Http\Controllers\Reserve\Ticket\UpdateController as ReserveTicketUpdate;

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
    // 業界研究：会社情報
    Route::get('/research/industry/{id}', ResearchCompaniesIndex::class)->name('research.companiesIndex');
    // 業界研究：選考情報
    Route::get('/research/company/{id}', ResearchSelectionsIndex::class)->name('research.selectionsIndex');
    // 業界研究：選考情報追加
    Route::get('/research/company/{id}/add', [ResearchSelectionsCreate::class, 'add'])->name('research.selectionsAdd');
    Route::post('/research/company/{id}/add', [ResearchSelectionsCreate::class, 'create'])->name('research.selectionsCreate');

    // 予約：トップ
    Route::get('/reserve', ReserveIndex::class)->name('reserve.index');
    // 予約：面談
    Route::get('/reserve/interview', ReserveInterviewIndex::class)->name('reserve.interviewIndex');
    // 予約：イベント
    Route::get('/reserve/event', ReserveEventIndex::class)->name('reserve.eventIndex');
    Route::get('/reserve/event/{id}', ReserveEventShow::class)->name('reserve.eventShow');
    Route::get('/reserve/event/{id}/confirm', [ReserveEventCreate::class, 'add'])->name('reserve.eventAdd');
    Route::post('/reserve/event/{id}/confirm', [ReserveEventCreate::class, 'create'])->name('reserve.eventCreate');
    // 予約：ケース
    Route::get('/reserve/case', [ReserveCaseCreate::class, 'add'])->name('reserve.caseAdd');
    Route::post('/reserve/case', [ReserveCaseCreate::class, 'create'])->name('reserve.caseCreate');
    // 予約：ES
    Route::get('/reserve/entrysheet', [ReserveEsCreate::class, 'add'])->name('reserve.esAdd');
    Route::post('/reserve/entrysheet', [ReserveEsCreate::class, 'create'])->name('reserve.esCreate');
    // 予約完了画面
    Route::get('/reserve/complete', function () {
        return view('reserve.complete');
    })->name('reserve.complete');
    // 予約：チケット追加
    Route::get('/reserve/ticket', [ReserveTicketUpdate::class, 'edit'])->name('reserve.ticketEdit');
    Route::post('/reserve/ticket', [ReserveTicketUpdate::class, 'update'])->name('reserve.ticketUpdate');

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
