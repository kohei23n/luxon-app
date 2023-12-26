<?php

namespace App\Http\Controllers\Admin\Mentor;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Interview;

class ShowController extends Controller
{
  public function __invoke($id)
  {
    $bookedInterviews = Interview::with('user')
      ->where('tin_mentor_id', $id)
      ->whereYear('tin_datetime', Carbon::now()->year)
      ->whereMonth('tin_datetime', Carbon::now()->month)
      ->where('tin_is_completed', Interview::IS_NOT_COMPLETED)
      ->get();
    
    $completedInterviews = Interview::with('user')
      ->where('tin_mentor_id', $id)
      ->whereYear('tin_datetime', Carbon::now()->year)
      ->whereMonth('tin_datetime', Carbon::now()->month)
      ->where('tin_is_completed', Interview::IS_COMPLETED)
      ->get();

    return view('admin.mentor.detail', compact('bookedInterviews', 'completedInterviews'));
  }
}
