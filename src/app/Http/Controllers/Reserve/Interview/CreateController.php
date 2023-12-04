<?php

namespace App\Http\Controllers\Reserve\Interview;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Interview;

class CreateController extends Controller
{
  public function add()
  {
    // 残りチケット数を取得
    $count = auth()->user()->userDetail;

    // メンターの一覧を取得
    $mentors = User::whereHas('mentorProfile')->get();

    return view('reserve.interview.add', compact('count', 'mentors'));
  }

  public function create(Request $request): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'tin_mentor_id' => 'required|integer',
      'tin_datetime' => 'required|date',
      'tin_time' => 'required|integer',
    ]);

    $user = auth()->user();

    // データの保存
    $interview = Interview::create([
      'tin_user_id' => $user->mus_user_id,
      'tin_mentor_id' => $request->tin_mentor_id,
      'tin_datetime' => $request->tin_datetime,
      'tin_time' => $request->tin_time,
    ]);

    // ユーザーのチケット残数を1減らす
    if ($request->tin_time == 60) {
      $user->userDetail->decrement('tud_interview_count_remaining');
      $user->userDetail->save();
    }

    if ($interview) {
      return Redirect::route('reserve.interviewIndex')->with('status', '面談情報が追加されました。');
    } else {
      return Redirect::route('reserve.interviewIndex')->with('error', '面談情報の追加に失敗しました。');
    }
  }
}
