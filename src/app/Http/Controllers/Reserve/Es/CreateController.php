<?php

namespace App\Http\Controllers\Reserve\Es;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\Company;
use App\Models\EsQuestion;

class CreateController extends Controller
{
  public function add()
  {
    // 残りチケット数を取得
    $user = auth()->user();
    $plan = $user->servicePlan;

    $companies = Company::with('industry')->get();

    return view('reserve.es.add', compact('plan', 'companies'));
  }

  public function create(Request $request): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'mes_company_id' => 'required|exists:luxon_trx_es,mes_company_id', // esテーブルにIDが存在することを確認
      'mes_es_url' => 'required|string|max:150',
    ]);

    $user = auth()->user();

    // データの保存
    $case = EsQuestion::create([
      'mes_user_id' => $user->mus_user_id,
      'mes_company_id' => $request->mes_company_id,
      'mes_es_url' => $request->mes_es_url
    ]);

    // ユーザーのチケット残数を1減らす
    $user->servicePlan->tsp_case_study_count = $user->servicePlan->tsp_case_study_count - 1;
    $user->servicePlan->save();

    if ($case) {
      return Redirect::route('reserve.complete')->with('status', 'es-status-created');
    } else {
      return Redirect::route('reserve.complete')->with('error', 'error-creating-es-status');
    }
  }
}
