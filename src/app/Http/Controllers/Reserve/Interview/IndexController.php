<?php

namespace App\Http\Controllers\Reserve\Interview;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  public function __invoke()
  {
    $user = auth()->user();

    // メンター情報表示
    $mentor = $user->dedicatedMentor;

    return view('reserve.interview.index', compact('mentor'));
  }
}