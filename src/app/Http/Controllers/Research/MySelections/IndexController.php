<?php

namespace App\Http\Controllers\Research\MySelections;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $selectionStatuses = $user->selectionStatuses->sortBy('tss_selection_date');

        return view('research.myselections.index', compact('selectionStatuses'));
    }
}
