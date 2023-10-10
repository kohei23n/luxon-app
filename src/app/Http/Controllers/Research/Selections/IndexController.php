<?php

namespace App\Http\Controllers\Research\Selections;

use App\Http\Controllers\Controller;
use App\Models\SelectionDetail;

class IndexController extends Controller
{
    public function __invoke($id)
    {
        //ユーザー情報表示
        $selections = SelectionDetail::with(['company', 'selectionPhase'])
        ->where('msd_company_id', $id)
        ->orderBy('msd_selection_phase_id', 'asc')
        ->get()
        ->groupBy('selectionPhase.msp_phase_name');

        return view('research.selections.index', compact('selections', 'id'));
    }
}
