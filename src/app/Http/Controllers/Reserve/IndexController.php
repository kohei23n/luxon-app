<?php

namespace App\Http\Controllers\Reserve;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  public function __invoke()
  {
    //ユーザー情報表示
    $user = auth()->user();

    // 残り回数の取得
    $count = $user->userDetail;

    return view('reserve.index', compact('count'));
  }
}
