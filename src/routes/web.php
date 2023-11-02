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

// ユーザー
Route::middleware('auth')->group(function () {

    Route::get('/', IndexController::class)->name('index');

    // 選考情報
    Route::group(['prefix' => 'research', 'as' => 'research.'], function () {
        // 選考情報
        Route::get('/', ResearchIndex::class)->name('index');
        // 選考情報：会社情報
        Route::get('/industry/{id}', ResearchCompaniesIndex::class)->name('companiesIndex');
        Route::prefix('company/{id}')->group(function () {
            Route::get('/', ResearchSelectionsIndex::class)->name('selectionsIndex');
            Route::get('/add', [ResearchSelectionsCreate::class, 'add'])->name('selectionsAdd');
            Route::post('/add', [ResearchSelectionsCreate::class, 'create'])->name('selectionsCreate');
        });
    });

    // 予約
    Route::group(['prefix' => 'reserve', 'as' => 'reserve.'], function () {
        // 予約：トップ
        Route::get('/', ReserveIndex::class)->name('index');
        // 予約：面談
        Route::get('/interview', ReserveInterviewIndex::class)->name('interviewIndex');
        // 予約：イベント
        Route::prefix('event')->group(function () {
            Route::get('/', ReserveEventIndex::class)->name('eventIndex');
            Route::get('/{id}', ReserveEventShow::class)->name('eventShow');
            Route::get('/{id}/confirm', [ReserveEventCreate::class, 'add'])->name('eventAdd');
            Route::post('/{id}/confirm', [ReserveEventCreate::class, 'create'])->name('eventCreate');
        });
        // 予約：ケース
        Route::prefix('case')->group(function () {
            Route::get('/', [ReserveCaseCreate::class, 'add'])->name('caseAdd');
            Route::post('/', [ReserveCaseCreate::class, 'create'])->name('caseCreate');
        });
        // 予約：ES
        Route::prefix('entrysheet')->group(function () {
            Route::get('/', [ReserveEsCreate::class, 'add'])->name('esAdd');
            Route::post('/', [ReserveEsCreate::class, 'create'])->name('esCreate');
        });
        // 予約完了画面
        Route::get('/complete', function () {
            return view('reserve.complete');
        })->name('complete');
        // 予約：チケット追加
        Route::prefix('ticket')->group(function () {
            Route::get('/', [ReserveTicketUpdate::class, 'edit'])->name('ticketEdit');
            Route::post('/', [ReserveTicketUpdate::class, 'update'])->name('ticketUpdate');
        });
    });

    // マイページトップ
    Route::group(['prefix' => 'mypage', 'as' => 'mypage.'], function () {
        Route::get('', MyPageIndex::class)->name('index');
        // プラン
        Route::get('/plan', MyPagePlanIndex::class)->name('planIndex');
        // プラン：個人情報
        Route::group(['prefix' => 'pi/edit', 'as' => 'plan.'], function () {
            Route::get('/', [MyPagePlanProfileUpdate::class, 'edit'])->name('profileEdit');
            Route::patch('/', [MyPagePlanProfileUpdate::class, 'update'])->name('profileUpdate');
        });
        // ここは後で直したい
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profileDestroy');

        // 選考情報
        Route::prefix('selection')->group(function () {
            Route::get('', MyPageSelectionIndex::class)->name('selectionIndex');
            Route::prefix('add')->group(function () {
                Route::get('/', [MyPageSelectionCreate::class, 'add'])->name('selectionAdd');
                Route::post('/', [MyPageSelectionCreate::class, 'create'])->name('selectionCreate');
            });
            Route::prefix('edit/{id}')->group(function () {
                Route::get('/', [MyPageSelectionUpdate::class, 'edit'])->name('selectionEdit');
                Route::patch('/', [MyPageSelectionUpdate::class, 'update'])->name('selectionUpdate');
            });
        });
    });

    // 管理者
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', function () {
            return view('admin.index');
        })->name('index');

        // メンティー情報
        Route::get('/mentee', AdminMenteeIndex::class)->name('menteeIndex');
        // メンター情報
        Route::get('/mentor', AdminMentorIndex::class)->name('mentorIndex');
        // チケット割り振り
        Route::prefix('count')->group(function () {
            Route::get('/', AdminCountIndex::class)->name('countIndex');
            Route::get('/edit/{id}', [AdminCountUpdate::class, 'edit'])->name('countEdit');
            Route::patch('/edit/{id}', [AdminCountUpdate::class, 'update'])->name('countUpdate');
        });
        // 添削割り振り
        Route::get('/review', function () {
            return view('admin.review.index');
        })->name('reviewHome');
        // ES
        Route::prefix('es')->group(function () {
            Route::get('/', AdminEsCount::class)->name('esCount');
            Route::get('/index', AdminEsIndex::class)->name('esIndex');
            Route::get('/{id}', [AdminEsUpdate::class, 'edit'])->name('esEdit');
            Route::patch('/{id}', [AdminEsUpdate::class, 'update'])->name('esUpdate');
        });
        // ケース
        Route::prefix('case')->group(function () {
            Route::get('/', AdminCaseCount::class)->name('caseCount');
            Route::get('/index', AdminCaseIndex::class)->name('caseIndex');
            Route::get('/{id}', [AdminCaseUpdate::class, 'edit'])->name('caseEdit');
            Route::patch('/{id}', [AdminCaseUpdate::class, 'update'])->name('caseUpdate');
        });
        // イベント
        Route::prefix('event')->group(function () {
            // イベント追加
            Route::get('/add', [AdminEventCreate::class, 'add'])->name('eventAdd');
            Route::post('/add', [AdminEventCreate::class, 'create'])->name('eventCreate');
            // イベント一覧
            Route::get('/', AdminEventIndex::class)->name('eventIndex');
            // イベント詳細
            Route::get('/{id}', AdminEventShow::class)->name('eventShow');
        });
    });

    // 管理者
    Route::group(['prefix' => 'mentor', 'as' => 'mentor.'], function () { 
        Route::get('/', function () {
            return view('mentor.index');
        })->name('index');
    });
});

require __DIR__ . '/auth.php';
