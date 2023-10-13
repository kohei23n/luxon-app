<?php

namespace App\Http\Controllers;
use App\Models\ServicePlan;

class IndexController extends Controller
{
    public function __invoke()
    {
        //ユーザー情報表示
        $user = auth()->user();

        return view('index', compact('user'));
    }
}
