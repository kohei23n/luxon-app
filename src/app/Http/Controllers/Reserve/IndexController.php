<?php

namespace App\Http\Controllers\Reserve;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        //ユーザー情報表示
        $user = auth()->user();

        return view('reserve.index', compact('user'));
    }
}
