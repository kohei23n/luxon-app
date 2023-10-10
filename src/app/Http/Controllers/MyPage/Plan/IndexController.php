<?php

namespace App\Http\Controllers\MyPage\Plan;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user()->with(['servicePlan', 'dedicatedMentor'])->first();

        return view('mypage.plan.index', compact('user'));
    }
}
