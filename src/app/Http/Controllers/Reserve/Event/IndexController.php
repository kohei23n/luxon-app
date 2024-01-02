<?php

namespace App\Http\Controllers\Reserve\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class IndexController extends Controller
{
  public function __invoke(Request $request)
  {
    // 残り回数の取得
    $count = auth()->user()->userDetail;

    // dateの取得
    $year = $request->get('year', date('Y'));
    $unformattedMonth = $request->get('month', date('m'));
    $month = sprintf('%02d', $unformattedMonth);

    $daysInMonth = Carbon::parse("$year-$month-01")->daysInMonth;
    $firstDayOfWeek = Carbon::parse("$year-$month-01")->dayOfWeek;

    // 先月、次月の取得
    $previousMonth = Carbon::parse("$year-$month-01")->subMonth();
    $nextMonth = Carbon::parse("$year-$month-01")->addMonth();

    // 年と月の取得
    $previousMonthYear = $previousMonth->year;
    $previousMonthNumber = $previousMonth->format('m');

    $nextMonthYear = $nextMonth->year;
    $nextMonthNumber = $nextMonth->format('m');

    // 月毎のイベント一覧
    $events = Event::whereMonth('mev_event_datetime', $month)
      ->whereYear('mev_event_datetime', $year)
      ->where('mev_delete_flag', false)
      ->orderBy('mev_event_datetime')
      ->get();

    $groupedEvents = $events->groupBy(function ($event) {
      return date('Y-m-d', strtotime($event->mev_event_datetime));
    });

    // 各イベントに背景色を設定
    foreach ($groupedEvents as $date => $events) {
      foreach ($events as $event) {
        switch ($event->mev_industry_id) {
          case 1:
            $event->backgroundColor = '#FF7276';
            break;
          case 2:
            $event->backgroundColor = '#ADD8E6';
            break;
          case 3:
          case 4:
            $event->backgroundColor = '#FFFDD0';
            break;
          default:
            $event->backgroundColor = '#FFFFFF'; // デフォルト色
            break;
        }
      }
    }

    return view('reserve.event.index', compact('count', 'year', 'month', 'daysInMonth', 'firstDayOfWeek', 'previousMonthYear', 'previousMonthNumber', 'nextMonthYear', 'nextMonthNumber', 'groupedEvents'));
  }
}
