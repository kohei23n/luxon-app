<?php

namespace App\Http\Controllers\Research\Selections;

use App\Http\Controllers\Controller;
use App\Models\SelectionDetail;
use App\Models\Company;

class IndexController extends Controller
{
    public function __invoke($id)
    {
        //選考情報表示
        $selections = SelectionDetail::with(['company', 'selectionPhase'])
        ->where('msd_company_id', $id)
        ->orderBy('msd_selection_phase_id', 'asc')
        ->get()
        ->groupBy('selectionPhase.msp_phase_name');

        // 業界情報の取得
        $industry = Company::findOrFail($id);

        return view('research.selections.index', compact('id', 'selections', 'industry'));
    }
}
