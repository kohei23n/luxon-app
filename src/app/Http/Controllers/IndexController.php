<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function __invoke()
    {
        //ユーザー情報表示
        $user = auth()->user();

        return view('index', compact('user'));
    }
}
