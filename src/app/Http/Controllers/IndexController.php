<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __invoke()
    {
        //ユーザー情報表示
        $user = auth()->user();

        // ログイン中のユーザーが参加表明しているイベントを取得
        $userId = $user->mus_user_id;

        $upcomingEvents = Event::where('mev_event_datetime', '>', Carbon::now())
            ->whereHas('eventParticipants', function ($query) use ($userId) {
                $query->where('tep_user_id', $userId);
            })
            ->get();

        return view('index', compact('user', 'upcomingEvents'));
    }
}
