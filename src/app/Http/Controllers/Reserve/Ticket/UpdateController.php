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
    $plan = auth()->user()->servicePlan;

    return view('reserve.ticket.edit', compact('plan'));
  }

  public function update(Request $request): RedirectResponse
  {
    // リクエストデータのバリデーション
    // $request->validate([
    //   'tsp_event_attendance' => 'required|integer',
    //   'tsp_interview_count' => 'required|integer',
    //   'tsp_es_count' => 'required|integer',
    //   'tsp_case_study_count' => 'required|integer',
    // ]);

    $plan = auth()->user()->servicePlan;

    // データの保存
    $plan->update([
      'tsp_event_attendance' => $plan->tsp_event_attendance + $request->tsp_event_attendance,
      'tsp_interview_count' => $plan->tsp_interview_count + $request->tsp_interview_count,
      'tsp_es_count' => $plan->tsp_es_count + $request->tsp_es_count,
      'tsp_case_study_count' => $plan->tsp_case_study_count + $request->tsp_case_study_count,
    ]);

    if ($plan) {
      return Redirect::route('reserve.complete')->with('status', 'ticket-status-updated');
    } else {
      return Redirect::route('reserve.complete')->with('error', 'error-updating-ticket-status');
    }
  }
}
