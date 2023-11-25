<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\Event;
use App\Models\EventParticipant;

class ConfirmController extends Controller
{
  public function __invoke($id): RedirectResponse
  {
    $event = Event::findOrFail($id);
    $eventParticipants = EventParticipant::where('tep_event_id', $id)->get();

    foreach ($eventParticipants as $participant) {
      $userDetail = $participant->user->userDetail;
      $user = $participant->user;

      // チケット残数が十分かどうかを確認
      if ($userDetail->tud_event_attendance_remaining <= 0) {
        // チケット残数が不足している場合は処理を中断
        return Redirect::route('admin.eventShow', $event->mev_event_id)->with('error', $user->mus_user_last_name . ' (ID: ' . $user->mus_user_id . ') のチケット数が不足しています.');
      }

      // 仮予約を本予約に変更
      $participant->tep_is_temp = EventParticipant::IS_CONFIRMED;
      $participant->save();

      // チケット残数を減らす
      $userDetail->tud_event_attendance_remaining -= 1;
      $userDetail->save();
    }

    return Redirect::route('admin.eventShow', $event->mev_event_id)->with('status', '予約者を確定しました。');
  }
}
