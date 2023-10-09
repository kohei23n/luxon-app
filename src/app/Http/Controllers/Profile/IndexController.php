<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user()->with(['servicePlan', 'dedicatedMentor', 'selectionStatuses'])->first();

        return view('profile.index', compact('user'));
    }
}
