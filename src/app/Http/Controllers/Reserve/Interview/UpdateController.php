<?php

namespace App\Http\Controllers\Reserve\Interview;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Interview;

class UpdateController extends Controller
{
  public function edit($id)
  {
    $interview = Interview::findOrfail($id);
    $mentors = User::whereHas('mentorProfile')->get();

    return view('reserve.interview.edit', compact('interview', 'mentors'));
  }

  public function update($id, Request $request): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'tin_mentor_id' => 'required|integer',
      'tin_datetime' => 'required|date',
      'tin_time' => 'required|integer',
    ]);

    $interview = Interview::findOrfail($id);

    // データの保存
    $interview->update([
      'tin_mentor_id' => $request->tin_mentor_id,
      'tin_datetime' => $request->tin_datetime,
      'tin_time' => $request->tin_time,
    ]);

    if ($interview) {
      return Redirect::route('reserve.interviewIndex')->with('status', '面談情報が更新されました。');
    } else {
      return Redirect::route('reserve.interviewIndex')->with('error', '面談情報の更新に失敗しました。');
    }
  }

  public function updateStatus($id): RedirectResponse
  {
    $interview = Interview::findOrfail($id);
    $interview->tin_is_completed = !$interview->tin_is_completed;
    $interview->save();

    return redirect()->back()->with('status', '面談のステータスが更新されました。');
  }
}
