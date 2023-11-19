<?php

namespace App\Http\Controllers\Reserve\Interview;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Models\Interview;

class UpdateController extends Controller
{
  public function update($id): RedirectResponse
  {
    $interview = Interview::findOrfail($id);
    $interview->tin_is_completed = !$interview->tin_is_completed;
    $interview->save();

    return redirect()->back()->with('status', '面談のステータスが更新されました。');
  }
}
