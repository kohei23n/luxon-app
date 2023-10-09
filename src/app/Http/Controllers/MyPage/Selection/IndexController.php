<?php

namespace App\Http\Controllers\MyPage\Selection;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user()->with(['selectionStatuses'])->first();

        return view('mypage.selection.index', compact('user'));
    }
}
