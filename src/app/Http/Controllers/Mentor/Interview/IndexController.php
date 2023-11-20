<?php

namespace App\Http\Controllers\Mentor\Interview;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Interview;

class IndexController extends Controller
{
  public function __invoke()
  {
    $user = auth()->user();
    
    $interviews = Interview::with('user')
      ->where('tin_mentor_id', $user->mus_user_id)
      ->whereYear('tin_datetime', Carbon::now()->year)
      ->whereMonth('tin_datetime', Carbon::now()->month)
      ->get();

    return view('mentor.interview.index', compact('interviews'));
  }
}