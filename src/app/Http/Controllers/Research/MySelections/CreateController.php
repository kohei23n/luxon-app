<?php

namespace App\Http\Controllers\Research\MySelections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\SelectionStatus;
use App\Models\SelectionPhase;

class CreateController extends Controller
{
    public function add()
    {
        $selectionPhases = SelectionPhase::all();

        return view('research.myselections.add', compact('selectionPhases'));
    }

    public function create(Request $request): RedirectResponse
    {
        // リクエストデータのバリデーション
        $request->validate([
            'tss_company_name' => 'required|string|max:255',
            'tss_selection_status' => 'required|string',
            'tss_preference_ranking' => 'required|integer|min:1',
            'tss_selection_date' => 'required|date',
        ]);

        $user = auth()->user();

        // データの保存
        $status = SelectionStatus::create([
            'tss_user_id' => $user->mus_user_id,
            'tss_company_name' => $request->tss_company_name,
            'tss_selection_status' => $request->tss_selection_status,
            'tss_preference_ranking' => $request->tss_preference_ranking,
            'tss_selection_date' => $request->tss_selection_date,
        ]);

        if ($status) {
            return Redirect::route('research.mySelectionsIndex')->with('status', 'selection-status-created');
        } else {
            return Redirect::route('research.mySelectionsIndex')->with('error', 'error-creating-selection-status');
        }
    }
}
