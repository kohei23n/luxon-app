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
        $event->delete();
        $message = 'イベントを削除しました。';
    } else {
        $message = 'イベントの削除に失敗しました。';
    }

    return Redirect::route('admin.eventIndex')->with('status', $message);
  }
}
