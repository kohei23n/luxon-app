<?php

namespace App\Http\Controllers\Research\MySelections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\SelectionStatus;
use App\Models\SelectionPhase;

class UpdateController extends Controller
{
  public function edit($id)
  {
    $status = SelectionStatus::where('tss_selection_status_id', $id)->first();
    $formattedDate = date('Y-m-d', strtotime($status->tss_selection_date));
    $selectionPhases = SelectionPhase::all();
    $selectedValue = $status->tss_selection_status;

    return view('research.myselections.edit', compact('status', 'formattedDate', 'selectionPhases', 'selectedValue'));
  }

  public function update(Request $request, $id): RedirectResponse
  {
    $status = SelectionStatus::where('tss_selection_status_id', $id)->first();

    $status->update([
      'tss_company_name' => $request->tss_company_name,
      'tss_selection_status' => $request->tss_selection_status,
      'tss_preference_ranking' => $request->tss_preference_ranking,
      'tss_selection_date' => $request->tss_selection_date,
    ]);

    return Redirect::route('research.mySelectionsIndex')->with('status', 'selection-status-updated');
  }
}
