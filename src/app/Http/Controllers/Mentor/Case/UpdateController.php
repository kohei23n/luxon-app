<?php

namespace App\Http\Controllers\Mentor\Case;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\CaseQuestion;

class UpdateController extends Controller
{
  public function edit($id)
  {
    $case = CaseQuestion::with('user')->findOrFail($id);

    return view('mentor.case.edit', compact('case'));
  }

  public function update($id): RedirectResponse
  {
    $case = CaseQuestion::findOrFail($id);

    $case->update([
      'tca_is_returned' => CaseQuestion::IS_RETURNED,
    ]);

    return Redirect::route('mentor.caseIndex')->with('status', 'case-status-updated');
  }
}
