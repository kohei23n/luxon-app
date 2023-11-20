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

        $user = auth()->user();
        $isMentor = $user->mus_is_mentor;
        
        return view('research.industries.index', compact('industries', 'isMentor'));
    }
}
