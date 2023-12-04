<?php

namespace App\Http\Controllers\Admin\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class DeleteController extends Controller
{
  public function __invoke($id): RedirectResponse
  {
    $mentor = User::findOrFail($id);

    if ($mentor) {
      $mentor->update(['mus_delete_flag' => true, 'mus_deletion_datetime' => now()]);
      return Redirect::route('admin.mentorIndex')->with('status', 'メンターを削除しました。');
    } else {
      return Redirect::route('admin.mentorIndex')->with('error', 'メンターの削除に失敗しました。');
    }
  }
}
