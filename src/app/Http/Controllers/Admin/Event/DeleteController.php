<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\Event;

class DeleteController extends Controller
{
  public function __invoke($id): RedirectResponse
  {
    $event = Event::findOrFail($id);

    if ($event) {
      $event->update(['mev_delete_flag' => true, 'mev_deletion_datetime' => now()]);
      return Redirect::route('admin.eventIndex')->with('status', 'イベントを削除しました。');
    } else {
      return Redirect::route('admin.eventIndex')->with('error', 'イベントの削除に失敗しました。');
    }
  }
}
