<?php

namespace App\Http\Controllers\Reserve\Interview;

use App\Http\Controllers\Controller;
use App\Models\Interview;

class IndexController extends Controller
{
  public function __invoke()
  {
    $user = auth()->user();
    $user->load('dedicatedMentor.mentorProfile');

    $interviews = Interview::where('tin_user_id', $user->mus_user_id)->get();

    return view('reserve.interview.index', compact('user', 'interviews'));
  }
}
