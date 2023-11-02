<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Models\EsQuestion;
use App\Models\CaseQuestion;

class IndexController extends Controller
{
  public function __invoke()
  {
    $user = auth()->user();

    $entrySheets = EsQuestion::where('tes_mentor_id', $user->mus_user_id)->count();
    $cases = CaseQuestion::where('tca_mentor_id', $user->mus_user_id)->count();

    return view('mentor.index', compact('entrySheets', 'cases'));
  }
}