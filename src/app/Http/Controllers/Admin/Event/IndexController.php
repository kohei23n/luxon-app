<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Event;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        // 月ごとのイベント一覧

        // dateの取得
        $year = $request->get('year', date('Y'));
        $month = $request->get('month', date('m'));
        $daysInMonth = Carbon::parse("$year-$month-01")->daysInMonth;
        $firstDayOfWeek = Carbon::parse("$year-$month-01")->dayOfWeek; 

        $previousMonth = Carbon::parse("$year-$month-01")->subMonth();
        $nextMonth = Carbon::parse("$year-$month-01")->addMonth();

        $events = Event::whereMonth('mev_event_datetime', $month)
            ->whereYear('mev_event_datetime', $year)
            ->orderBy('mev_event_datetime')
            ->get();

        $groupedEvents = $events->groupBy(function ($event) {
            return date('Y-m-d', strtotime($event->mev_event_datetime));
        });

        return view('admin.event.index', compact('year', 'month', 'daysInMonth', 'previousMonth', 'nextMonth', 'firstDayOfWeek', 'groupedEvents'));
    }
}
