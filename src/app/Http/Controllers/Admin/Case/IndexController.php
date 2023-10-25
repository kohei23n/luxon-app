<?php

namespace App\Http\Controllers\Admin\Case;

use App\Http\Controllers\Controller;
use App\Models\CaseQuestion;

class IndexController extends Controller
{
    public function __invoke()
    {
        //選考情報表示
        $cases = CaseQuestion::all();

        return view('admin.case.index', compact('cases'));
    }
}
