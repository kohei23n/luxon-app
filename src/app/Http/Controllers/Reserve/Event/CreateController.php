<?php

namespace App\Http\Controllers\Reserve\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventParticipant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class CreateController extends Controller
{
  public function add($id)
  {
    // 残り回数の取得
    $count = auth()->user()->userDetail;

    // イベントの取得
    $event = Event::findOrFail($id);

    return view('reserve.event.confirm', compact('count', 'event'));
  }

  public function create(Request $request, $id): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'mev_event_id' => 'required|exists:luxon_mst_event,mev_event_id', // eventsテーブルにIDが存在することを確認
    ]);

    $user = auth()->user();
    $event = Event::findOrFail($id);

    // イベントが仮予約可能かどうかを判断
    $isTemporaryReservation = $event->mev_temp_enabled;

    // データの保存
    $participant = EventParticipant::create([
      'tep_event_id' => $id,
      'tep_user_id' => $user->mus_user_id,
      'tep_is_temp' => $isTemporaryReservation ? 1 : 0,
    ]);

    // 仮予約ではない場合にチケット残数を減らす
    if (!$isTemporaryReservation) {
      $user->userDetail->tud_event_attendance_remaining -= 1;
      $user->userDetail->save();
    }

    if ($participant) {
      return Redirect::route('reserve.complete')->with('status', 'event-status-created');
    } else {
      return Redirect::route('reserve.complete')->with('error', 'error-creating-event-status');
    }
  }
}
