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
    $count = auth()->user()->userDetail;

    $companies = Company::with('industry')->get();

    return view('reserve.es.add', compact('count', 'companies'));
  }

  public function create(Request $request): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'tes_company_id' => 'required|exists:luxon_trx_es,tes_company_id', // esテーブルにIDが存在することを確認
      'tes_es_url' => 'required|string|max:150',
    ]);

    $user = auth()->user();

    // データの保存
    $case = EsQuestion::create([
      'tes_user_id' => $user->mus_user_id,
      'tes_company_id' => $request->tes_company_id,
      'tes_es_url' => $request->tes_es_url
    ]);

    // ユーザーのチケット残数を1減らす
    $user->servicePlan->tsp_es_count = $user->servicePlan->tsp_es_count - 1;
    $user->servicePlan->save();

    if ($case) {
      return Redirect::route('reserve.complete')->with('status', 'es-status-created');
    } else {
      return Redirect::route('reserve.complete')->with('error', 'error-creating-es-status');
    }
  }
}
