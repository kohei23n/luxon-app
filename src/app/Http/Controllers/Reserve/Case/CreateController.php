<?php

namespace App\Http\Controllers\Reserve\Case;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseQuestion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class CreateController extends Controller
{
  public function add()
  {
    // 残りチケット数を取得
    $plan = auth()->user()->servicePlan;

    return view('reserve.case.add', compact('plan'));
  }

  public function create(Request $request): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'mca_case_content' => 'required|string|max:255',
      'mca_case_time' => 'required|integer',
      'mca_case_url' => 'required|string|max:150',
    ]);

    $user = auth()->user();

    // データの保存
    $case = CaseQuestion::create([
      'mca_case_user_id' => $user->mus_user_id,
      'mca_case_content' => $request->mca_case_content,
      'mca_case_time' => $request->mca_case_time,
      'mca_case_url' => $request->mca_case_url
    ]);

    // ユーザーのチケット残数を1減らす
    $user->servicePlan->tsp_case_study_count = $user->servicePlan->tsp_case_study_count - 1;
    $user->servicePlan->save();

    if ($case) {
      return Redirect::route('reserve.complete')->with('status', 'case-status-created');
    } else {
      return Redirect::route('reserve.complete')->with('error', 'error-creating-case-status');
    }
  }
}
