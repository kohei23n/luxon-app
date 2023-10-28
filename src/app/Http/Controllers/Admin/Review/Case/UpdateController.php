<?php

namespace App\Http\Controllers\Admin\Review\Case;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\CaseQuestion;
use App\Models\Mentor;

class UpdateController extends Controller
{
  public function edit($id)
  {
    $case = CaseQuestion::with('user')->findOrfail($id);

    $mentors = Mentor::all();

    return view('admin.review.case.edit', compact('id', 'case', 'mentors'));
  }

  public function update(Request $request, $id): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'tca_mentor_id' => 'required|integer',
    ]);

    $case = CaseQuestion::findOrfail($id);

    // データの保存
    $case->update([
      'tca_mentor_id' => $request->tca_mentor_id,
    ]);

    if ($case) {
      return Redirect::route('admin.caseCount', $id)->with('status', 'case-status-updated');
    } else {
      return Redirect::route('admin.caseCount', $id)->with('error', 'error-updating-case-status');
    }
  }
}
