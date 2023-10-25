<?php

namespace App\Http\Controllers\Admin\Es;

use App\Http\Controllers\Controller;
use App\Models\EsQuestion;

class IndexController extends Controller
{
    public function __invoke()
    {
        //選考情報表示
        $entrySheets = EsQuestion::all();

        return view('admin.count.index', compact('entrySheets'));
    }
}
