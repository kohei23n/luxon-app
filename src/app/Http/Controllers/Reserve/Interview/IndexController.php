<?php

namespace App\Http\Controllers\Reserve\Interview;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  public function __invoke()
  {
    $user = auth()->user();

    // dedicatedMentorとそのmentorProfileを事前ロードする
    $user->load('dedicatedMentor.mentorProfile');

    // メンター情報を取得する
    $mentor = $user->dedicatedMentor;

    // もしメンターがいれば、そのメンタープロファイルを取得する
    $mentorProfile = $mentor ? $mentor->mentorProfile : null;

    return view('reserve.interview.index', compact('mentor', 'mentorProfile'));
  }
}
