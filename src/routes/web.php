<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;

// 選考情報
use App\Http\Controllers\Research\IndexController as ResearchIndex;
// 選考情報：業界別会社情報
use App\Http\Controllers\Research\Companies\IndexController as ResearchCompaniesIndex;
// 選考情報：選考情報
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

// 管理者

// メンティー情報
use App\Http\Controllers\Admin\Mentee\IndexController as AdminMenteeIndex;
// メンター情報
use App\Http\Controllers\Admin\Mentor\IndexController as AdminMentorIndex;
// チケット割り振り
use App\Http\Controllers\Admin\Count\IndexController as AdminCountIndex;
use App\Http\Controllers\Admin\Count\UpdateController as AdminCountUpdate;
// 添削割り振り
// ES
use App\Http\Controllers\Admin\Review\Es\CountController as AdminEsCount;
use App\Http\Controllers\Admin\Review\Es\IndexController as AdminEsIndex;
use App\Http\Controllers\Admin\Review\Es\UpdateController as AdminEsUpdate;
// ケース
use App\Http\Controllers\Admin\Review\Case\CountController as AdminCaseCount;
use App\Http\Controllers\Admin\Review\Case\IndexController as AdminCaseIndex;
use App\Http\Controllers\Admin\Review\Case\UpdateController as AdminCaseUpdate;
// イベント管理
use App\Http\Controllers\Admin\Event\IndexController as AdminEventIndex;
use App\Http\Controllers\Admin\Event\ShowController as AdminEventShow;
// イベント追加
use App\Http\Controllers\Admin\Event\CreateController as AdminEventCreate;

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
    // 選考情報
    Route::get('/research', ResearchIndex::class)->name('research.index');
    // 選考情報：会社情報
    Route::get('/research/industry/{id}', ResearchCompaniesIndex::class)->name('research.companiesIndex');
    // 選考情報：選考情報
    Route::get('/research/company/{id}', ResearchSelectionsIndex::class)->name('research.selectionsIndex');
    // 選考情報：選考情報追加
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

    // 管理者
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin.index');

    // メンティー情報
    Route::get('/admin/mentee', AdminMenteeIndex::class)->name('admin.menteeIndex');
    // メンター情報
    Route::get('/admin/mentor', AdminMentorIndex::class)->name('admin.mentorIndex');
    // チケット割り振り
    Route::get('/admin/count', AdminCountIndex::class)->name('admin.countIndex');
    Route::get('/admin/count/edit/{id}', [AdminCountUpdate::class, 'edit'])->name('admin.countEdit');
    Route::patch('/admin/count/edit/{id}', [AdminCountUpdate::class, 'update'])->name('admin.countUpdate');
    // 添削割り振り
    Route::get('/admin/review', function () {
        return view('admin.review.index');
    })->name('admin.reviewHome');
    // ES
    Route::get('/admin/es', AdminEsCount::class)->name('admin.esCount');
    Route::get('/admin/es/index', AdminEsIndex::class)->name('admin.esIndex');
    Route::get('/admin/es/{id}', [AdminEsUpdate::class, 'edit'])->name('admin.esEdit');
    Route::patch('/admin/es/{id}', [AdminEsUpdate::class, 'update'])->name('admin.esUpdate');
    // ケース
    Route::get('/admin/case', AdminCaseCount::class)->name('admin.caseCount');
    Route::get('/admin/case/index', AdminCaseIndex::class)->name('admin.caseIndex');
    Route::get('/admin/case/{id}', [AdminCaseUpdate::class, 'edit'])->name('admin.caseEdit');
    Route::patch('/admin/case/{id}', [AdminCaseUpdate::class, 'update'])->name('admin.caseUpdate');
    // イベント追加
    Route::get('/admin/event/add', [AdminEventCreate::class, 'add'])->name('admin.eventAdd');
    Route::post('/admin/event/add', [AdminEventCreate::class, 'create'])->name('admin.eventCreate');
    // イベント一覧
    Route::get('/admin/event', AdminEventIndex::class)->name('admin.eventIndex');
    // イベント詳細
    Route::get('/admin/event/{id}', AdminEventShow::class)->name('admin.eventShow');
});

require __DIR__ . '/auth.php';
