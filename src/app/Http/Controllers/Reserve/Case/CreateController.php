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
    $count = auth()->user()->userDetail;

    return view('reserve.case.add', compact('count'));
  }

  public function create(Request $request): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'tca_case_content' => 'required|string|max:255',
      'tca_case_time' => 'required|integer',
      'tca_case_url' => 'required|string|max:150',
    ]);

    $user = auth()->user();

    // データの保存
    $case = CaseQuestion::create([
      'tca_case_user_id' => $user->mus_user_id,
      'tca_case_content' => $request->tca_case_content,
      'tca_case_time' => $request->tca_case_time,
      'tca_case_url' => $request->tca_case_url
    ]);

    // ユーザーのチケット残数を1減らす
    $user->userDetail->tud_case_study_count_remaining = $user->userDetail->tud_case_study_count_remaining - 1;
    $user->userDetail->save();

    if ($case) {
      return Redirect::route('reserve.complete')->with('status', 'case-status-created');
    } else {
      return Redirect::route('reserve.complete')->with('error', 'error-creating-case-status');
    }
  }
}
