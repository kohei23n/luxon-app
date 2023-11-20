<?php

namespace App\Http\Controllers\Admin\Mentee;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Interview;

class ShowController extends Controller
{
  public function __invoke($id)
  {
    $user = User::with('userDetail')->findOrFail($id);
    
    $interviews = Interview::with('mentor')
      ->where('tin_user_id', $id)
      ->whereYear('tin_datetime', Carbon::now()->year)
      ->whereMonth('tin_datetime', Carbon::now()->month)
      ->get();

    return view('admin.mentee.detail', compact('user', 'interviews'));
  }
}
