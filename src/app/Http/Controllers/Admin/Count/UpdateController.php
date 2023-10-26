<?php

namespace App\Http\Controllers\Admin\Count;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class UpdateController extends Controller
{
  public function edit($id)
  {
    // 残りチケット数を取得
    $count = User::findOrfail($id)->userDetail;

    return view('admin.count.edit', compact('id', 'count'));
  }

  public function update(Request $request, $id): RedirectResponse
  {
    // リクエストデータのバリデーション
    // $request->validate([
    //   'tsp_event_attendance' => 'required|integer',
    //   'tsp_interview_count' => 'required|integer',
    //   'tsp_es_count' => 'required|integer',
    //   'tsp_case_study_count' => 'required|integer',
    // ]);

    $count = User::findOrfail($id)->userDetail;

    // データの保存
    $count->update([
      'tud_event_attendance_remaining' => $count->tud_event_attendance_remaining + $request->tud_event_attendance_remaining,
      'tud_interview_count_remaining' => $count->tud_interview_count_remaining + $request->tud_interview_count_remaining,
      'tud_es_count_remaining' => $count->tud_es_count_remaining + $request->tud_es_count_remaining,
      'tud_case_study_count_remaining' => $count->tud_case_study_count_remaining + $request->tud_case_study_count_remaining,
    ]);

    if ($count) {
      return Redirect::route('admin.countEdit', $id)->with('status', 'ticket-status-updated');
    } else {
      return Redirect::route('admin.countEdit', $id)->with('error', 'error-updating-ticket-status');
    }
  }
}
