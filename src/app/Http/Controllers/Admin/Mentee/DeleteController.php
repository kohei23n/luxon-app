<?php

namespace App\Http\Controllers\Admin\Mentee;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class DeleteController extends Controller
{
  public function __invoke($id): RedirectResponse
  {
    $user = User::findOrFail($id);

    if ($user) {
      $user->update(['mus_delete_flag' => true, 'mus_deletion_datetime' => now()]);
      return Redirect::route('admin.menteeIndex')->with('status', 'メンティーを削除しました。');
    } else {
      return Redirect::route('admin.menteeIndex')->with('error', 'メンティーの削除に失敗しました。');
    }
  }
}
