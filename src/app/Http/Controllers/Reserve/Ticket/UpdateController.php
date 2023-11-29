<?php

namespace App\Http\Controllers\Reserve\Ticket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class UpdateController extends Controller
{
  public function edit()
  {
    // 残りチケット数を取得
    $count = auth()->user()->userDetail;

    return view('reserve.ticket.edit', compact('count'));
  }

  public function update(Request $request): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'tsp_event_attendance' => 'required|integer',
      'tsp_interview_count' => 'required|integer',
      'tsp_es_count' => 'required|integer',
      'tsp_case_study_count' => 'required|integer',
    ]);

    $count = auth()->user()->userDetail;

    // データの保存
    $count->update([
      'tud_event_attendance_remaining' => $count->tud_event_attendance_remaining + $request->tud_event_attendance_remaining,
      'tud_interview_count_remaining' => $count->tud_interview_count_remaining + $request->tud_interview_count_remaining,
      'tud_es_count_remaining' => $count->tud_es_count_remaining + $request->tud_es_count_remaining,
      'tud_case_study_count_remaining' => $count->tud_case_study_count_remaining + $request->tud_case_study_count_remaining,
    ]);

    if ($count) {
      return Redirect::route('reserve.complete')->with('status', 'ticket-status-updated');
    } else {
      return Redirect::route('reserve.complete')->with('error', 'error-updating-ticket-status');
    }
  }
}
