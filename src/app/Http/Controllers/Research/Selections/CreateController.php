<?php

namespace App\Http\Controllers\Research\Selections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\SelectionDetail;
use App\Models\SelectionPhase;
use App\Models\Company;

class CreateController extends Controller
{
  public function add($id)
  {
    //ユーザー情報表示
    $selectionDetails = SelectionDetail::where('msd_company_id', $id)->get();

    $selectionPhases = SelectionPhase::all();

    return view('research.selections.add', compact('selectionDetails', 'id', 'selectionPhases'));
  }

  public function create(Request $request, $id): RedirectResponse
  {
    // リクエストデータのバリデーション
    $request->validate([
      'msd_selection_phase_id' => 'required|integer',
      'msd_selection_detail' => 'required|string',
    ]);

    $industryId = Company::findOrFail($id)->mco_industry_id;

    // データの保存
    $status = SelectionDetail::create([
      'msd_industry_id' => $industryId,
      'msd_company_id' => $id,
      'msd_selection_phase_id' => $request->msd_selection_phase_id,
      'msd_selection_detail' => $request->msd_selection_detail,
    ]);

    if ($status) {
      return Redirect::route('research.selectionsIndex', $id)->with('status', 'selection-detail-created');
    } else {
      return Redirect::route('research.selectionsIndex', $id)->with('error', 'error-creating-selection-detail');
    }
  }
}
