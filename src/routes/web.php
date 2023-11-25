<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;

// 選考対策
use App\Http\Controllers\Prep\IndexController as PrepIndex;
// 選考対策：ケース
use App\Http\Controllers\Prep\Case\CreateController as PrepCaseCreate;

// 選考情報
// 選考情報：業界別会社情報
use App\Http\Controllers\Research\Industries\IndexController as ResearchIndustriesIndex;
use App\Http\Controllers\Research\Companies\IndexController as ResearchCompaniesIndex;
// 選考情報：選考情報
use App\Http\Controllers\Research\Selections\IndexController as ResearchSelectionsIndex;
use App\Http\Controllers\Research\Selections\CreateController as ResearchSelectionsCreate;
// 選考情報：ユーザー
use App\Http\Controllers\Research\MySelections\IndexController as ResearchMySelectionsIndex;
use App\Http\Controllers\Research\MySelections\CreateController as ResearchMySelectionsCreate;
use App\Http\Controllers\Research\MySelections\UpdateController as ResearchMySelectionsUpdate;

// 予約
use App\Http\Controllers\Reserve\IndexController as ReserveIndex;
// 予約：面談
use App\Http\Controllers\Reserve\Interview\IndexController as ReserveInterviewIndex;
use App\Http\Controllers\Reserve\Interview\CreateController as ReserveInterviewCreate;
use App\Http\Controllers\Reserve\Interview\UpdateController as ReserveInterviewUpdate;
// 予約：イベント
use App\Http\Controllers\Reserve\Event\IndexController as ReserveEventIndex;
use App\Http\Controllers\Reserve\Event\ShowController as ReserveEventShow;
use App\Http\Controllers\Reserve\Event\CreateController as ReserveEventCreate;
// 予約：ES
use App\Http\Controllers\Reserve\Es\CreateController as ReserveEsCreate;
// 予約：チケット追加
use App\Http\Controllers\Reserve\Ticket\UpdateController as ReserveTicketUpdate;

// マイページ
// トップ
use App\Http\Controllers\MyPage\IndexController as MyPageIndex;
// プラン：個人情報
use App\Http\Controllers\MyPage\Plan\Profile\UpdateController as MyPagePlanProfileUpdate;

// 管理者

// メンティー
use App\Http\Controllers\Admin\Mentee\IndexController as AdminMenteeIndex;
use App\Http\Controllers\Admin\Mentee\ShowController as AdminMenteeShow;
use App\Http\Controllers\Admin\Mentee\CreateController as AdminMenteeCreate;
// メンター
use App\Http\Controllers\Admin\Mentor\IndexController as AdminMentorIndex;
use App\Http\Controllers\Admin\Mentor\CreateController as AdminMentorCreate;
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
// イベント編集
use App\Http\Controllers\Admin\Event\UpdateController as AdminEventUpdate;
use App\Http\Controllers\Admin\Event\DeleteController as AdminEventDelete;

// メンター
use App\Http\Controllers\Mentor\IndexController as MentorIndex;
use App\Http\Controllers\Mentor\Interview\IndexController as MentorInterviewIndex;
use App\Http\Controllers\Mentor\Es\IndexController as MentorEsIndex;
use App\Http\Controllers\Mentor\Es\UpdateController as MentorEsUpdate;
use App\Http\Controllers\Mentor\Case\IndexController as MentorCaseIndex;
use App\Http\Controllers\Mentor\Case\UpdateController as MentorCaseUpdate;

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
    // トップ
    Route::get('/', IndexController::class)->name('index');

    // 選考対策
    Route::group(['prefix' => 'prep', 'as' => 'prep.'], function () {
        // 選考対策
        Route::get('/', PrepIndex::class)->name('index');
        // ケース
        Route::prefix('case')->group(function () {
            Route::get('/', [PrepCaseCreate::class, 'add'])->name('caseAdd');
            Route::post('/', [PrepCaseCreate::class, 'create'])->name('caseCreate');
        });
    });

    // 選考情報
    Route::group(['prefix' => 'research', 'as' => 'research.'], function () {
        // 選考情報：トップ
        Route::get('/', function() {
            return view('research.index');
        })->name('index');
        // 選考情報：業界一覧
        Route::get('/companies', ResearchIndustriesIndex::class)->name('industriesIndex');
        // 選考情報：会社情報
        Route::get('/industry/{id}', ResearchCompaniesIndex::class)->name('companiesIndex');
        Route::prefix('company/{id}')->group(function () {
            Route::get('/', ResearchSelectionsIndex::class)->name('selectionsIndex');
            Route::get('/add', [ResearchSelectionsCreate::class, 'add'])->name('selectionsAdd');
            Route::post('/add', [ResearchSelectionsCreate::class, 'create'])->name('selectionsCreate');
        });

        // 選考情報（個人）
        Route::prefix('myselections')->group(function () {
            Route::get('', ResearchMySelectionsIndex::class)->name('mySelectionsIndex');
            Route::prefix('add')->group(function () {
                Route::get('/', [ResearchMySelectionsCreate::class, 'add'])->name('mySelectionsAdd');
                Route::post('/', [ResearchMySelectionsCreate::class, 'create'])->name('mySelectionsCreate');
            });
            Route::prefix('edit/{id}')->group(function () {
                Route::get('/', [ResearchMySelectionsUpdate::class, 'edit'])->name('mySelectionsEdit');
                Route::patch('/', [ResearchMySelectionsUpdate::class, 'update'])->name('mySelectionsUpdate');
            });
        });
    });

    // 予約
    Route::group(['prefix' => 'reserve', 'as' => 'reserve.'], function () {
        // 予約：トップ
        Route::get('/', ReserveIndex::class)->name('index');
        // 予約：面談
        Route::get('/interview', ReserveInterviewIndex::class)->name('interviewIndex');
        Route::prefix('interview')->group(function () {
            Route::get('/add', [ReserveInterviewCreate::class, 'add'])->name('interviewAdd');
            Route::post('/add', [ReserveInterviewCreate::class, 'create'])->name('interviewCreate');
        });
        Route::prefix('interview/{id}')->group(function () {
            Route::patch('/', [ReserveInterviewUpdate::class, 'update'])->name('interviewUpdate');
        });
        // 予約：イベント
        Route::prefix('event')->group(function () {
            Route::get('/', ReserveEventIndex::class)->name('eventIndex');
            Route::get('/{id}', ReserveEventShow::class)->name('eventShow');
            Route::get('/{id}/confirm', [ReserveEventCreate::class, 'add'])->name('eventAdd');
            Route::post('/{id}/confirm', [ReserveEventCreate::class, 'create'])->name('eventCreate');
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
        // プラン：個人情報
        Route::group(['prefix' => 'pi/edit', 'as' => 'plan.'], function () {
            Route::get('/', [MyPagePlanProfileUpdate::class, 'edit'])->name('profileEdit');
            Route::patch('/', [MyPagePlanProfileUpdate::class, 'update'])->name('profileUpdate');
        });
        // ここは後で直したい
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profileDestroy');
    });

    // 管理者
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', function () {
            return view('admin.index');
        })->name('index');
        // メンティー
        Route::get('/mentee', AdminMenteeIndex::class)->name('menteeIndex');
        Route::get('/mentee/add', [AdminMenteeCreate::class, 'add'])->name('menteeAdd');
        Route::post('/mentee/add', [AdminMenteeCreate::class, 'create'])->name('menteeCreate');
        Route::get('/mentee/{id}', AdminMenteeShow::class)->name('menteeShow');
        // メンター
        Route::get('/mentor', AdminMentorIndex::class)->name('mentorIndex');
        Route::get('/mentor/add', function () {
            return view('admin.mentor.add');
        })->name('mentorAdd');
        Route::post('/mentor/add', AdminMentorCreate::class)->name('mentorCreate');
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
            // イベント編集
            Route::get('/{id}/edit', [AdminEventUpdate::class, 'edit'])->name('eventEdit');
            Route::patch('/{id}/edit', [AdminEventUpdate::class, 'update'])->name('eventUpdate');
            Route::delete('/{id}/delete', AdminEventDelete::class)->name('eventDelete');
        });
    });

    // メンター
    Route::group(['prefix' => 'mentor', 'as' => 'mentor.'], function () { 
        Route::get('/', MentorIndex::class)->name('index');
        // 面談
        Route::get('/interview', MentorInterviewIndex::class)->name('interviewIndex');
        // ES
        Route::prefix('es')->group(function () {
            Route::get('/', MentorEsIndex::class)->name('esIndex');
            Route::get('/edit/{id}', [MentorEsUpdate::class, 'edit'])->name('esEdit');
            Route::patch('/edit/{id}', [MentorEsUpdate::class, 'update'])->name('esUpdate');
        });
        // ケース
        Route::prefix('case')->group(function () {
            Route::get('/', MentorCaseIndex::class)->name('caseIndex');
            Route::get('/edit/{id}', [MentorCaseUpdate::class, 'edit'])->name('caseEdit');
            Route::patch('/edit/{id}', [MentorCaseUpdate::class, 'update'])->name('caseUpdate');
        });
    });
});

require __DIR__ . '/auth.php';
