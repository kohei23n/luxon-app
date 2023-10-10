<?php

namespace App\Http\Controllers\Research\Companies;

use App\Http\Controllers\Controller;
use App\Models\Company;

class IndexController extends Controller
{
    public function __invoke($id)
    {
        //ユーザー情報表示
        $companies = Company::with(['industry'])->where('mco_industry_id', $id)->get();

        return view('research.companies.index', compact('companies'));
    }
}
