<?php

namespace App\Http\Controllers\Admin\Review\Es;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\EsQuestion;
use App\Models\Mentor;

class UpdateController extends Controller
{
  public function edit($id)
  {
    $sheet = EsQuestion::with('user')->findOrfail($id);

    $mentors = Mentor::all();

    return view('admin.review.es.edit', compact('id', 'sheet', 'mentors'));
  }

  public function update(Request $request, $id): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'tes_mentor_id' => 'required|integer',
    ]);

    $sheet = EsQuestion::findOrfail($id);

    // データの保存
    $sheet->update([
      'tes_mentor_id' => $request->tes_mentor_id,
    ]);

    if ($sheet) {
      return Redirect::route('admin.esCount', $id)->with('status', 'es-status-updated');
    } else {
      return Redirect::route('admin.esCount', $id)->with('error', 'error-updating-es-status');
    }
  }
}
