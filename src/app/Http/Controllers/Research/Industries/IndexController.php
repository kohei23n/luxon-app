<?php

namespace App\Http\Controllers\Research\Industries;

use App\Http\Controllers\Controller;
use App\Models\Industry;

class IndexController extends Controller
{
    public function __invoke()
    {
        //ユーザー情報表示
        $industries = Industry::all();

        return view('research.industries.index', compact('industries'));
    }
}