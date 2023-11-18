<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $user->load('userDetail', 'dedicatedMentor.mentorProfile');

        return view('mypage.index', compact('user'));
    }
}