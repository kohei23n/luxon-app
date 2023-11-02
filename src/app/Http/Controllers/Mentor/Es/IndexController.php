<?php

namespace App\Http\Controllers\Mentor\Es;

use App\Http\Controllers\Controller;
use App\Models\EsQuestion;

class IndexController extends Controller
{
  public function __invoke()
  {
    $user = auth()->user();

    // 返却前
    $entrySheets = EsQuestion::with(['user', 'company'])->where('tes_mentor_id', $user->mus_user_id)->where('tes_is_returned', EsQuestion::IS_NOT_RETURNED)->get();

    // 返却済み
    $returnedSheets = EsQuestion::with(['user', 'company'])->where('tes_mentor_id', $user->mus_user_id)->where('tes_is_returned', EsQuestion::IS_RETURNED)->get();

    return view('mentor.es.index', compact('entrySheets', 'returnedSheets'));
  }
}
