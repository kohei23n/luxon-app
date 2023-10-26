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
    $month = $request->get('month', date('m'));
    $daysInMonth = Carbon::parse("$year-$month-01")->daysInMonth;
    $firstDayOfWeek = Carbon::parse("$year-$month-01")->dayOfWeek; 

    // 先月、次月の取得
    $previousMonth = Carbon::parse("$year-$month-01")->subMonth();
    $nextMonth = Carbon::parse("$year-$month-01")->addMonth();

    // 月毎のイベント一覧
    $events = Event::whereMonth('mev_event_datetime', $month)
      ->whereYear('mev_event_datetime', $year)
      ->orderBy('mev_event_datetime')
      ->get();

    $groupedEvents = $events->groupBy(function ($event) {
      return date('Y-m-d', strtotime($event->mev_event_datetime));
    });

    return view('reserve.event.index', compact('count', 'year', 'month', 'daysInMonth', 'firstDayOfWeek', 'previousMonth', 'nextMonth', 'groupedEvents'));
  }
}
