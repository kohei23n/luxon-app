<?php

namespace App\Http\Controllers\Research\Industry;

use App\Http\Controllers\Controller;
use App\Models\Industry;

class IndexController extends Controller
{
    public function __invoke($id)
    {
        //ユーザー情報表示
        $companies = Industry::with(['companies'])->where('min_industry_id', $id)->get();

        return view('research.industry.index', compact('companies'));
    }
}
