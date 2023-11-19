<?php

namespace App\Http\Controllers\Reserve\Interview;

use App\Http\Controllers\Controller;
use App\Models\Interview;
use Carbon\Carbon;

class IndexController extends Controller
{
  public function __invoke()
  {
    $user = auth()->user();
    $user->load('dedicatedMentor.mentorProfile');

    $count = $user->userDetail;

    $interviews = Interview::where('tin_user_id', $user->mus_user_id)
      ->whereYear('tin_datetime', Carbon::now()->year)
      ->whereMonth('tin_datetime', Carbon::now()->month)
      ->get();

    return view('reserve.interview.index', compact('user', 'count', 'interviews'));
  }
}
