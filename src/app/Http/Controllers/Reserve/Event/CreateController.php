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
    //ユーザー情報表示
    $event = Event::findOrFail($id);

    return view('reserve.event.confirm', compact('event'));
  }

  public function create(Request $request, $id): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'mev_event_id' => 'required|exists:luxon_mst_event,mev_event_id', // eventsテーブルにIDが存在することを確認
    ]);

    $user = auth()->user();

    // データの保存
    $participant = EventParticipant::create([
      'tep_event_id' => $id,
      'tep_user_id' => $user->mus_user_id,
    ]);

    if ($participant) {
      return Redirect::route('reserve.eventIndex')->with('status', 'event-status-created');
    } else {
      return Redirect::route('reserve.eventIndex')->with('error', 'error-creating-event-status');
    }
  }
}
