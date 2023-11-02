<?php

namespace App\Http\Controllers\Mentor\Case;

use App\Http\Controllers\Controller;
use App\Models\CaseQuestion;

class IndexController extends Controller
{
  public function __invoke()
  {
    $user = auth()->user();

    // 返却前
    $cases = CaseQuestion::with('user')->where('tca_mentor_id', $user->mus_user_id)->where('tca_is_returned', CaseQuestion::IS_NOT_RETURNED)->get();

    // 返却済み
    $returnedCases = CaseQuestion::with('user')->where('tca_mentor_id', $user->mus_user_id)->where('tca_is_returned', CaseQuestion::IS_RETURNED)->get();

    return view('mentor.case.index', compact('cases', 'returnedCases'));
  }
}