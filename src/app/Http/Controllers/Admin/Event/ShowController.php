<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventParticipant;

class ShowController extends Controller
{
  public function __invoke($id)
  {
    $event = Event::findOrFail($id);

    $participants = $event->eventParticipants;

    $participants = $event->eventParticipants->map(function ($participant) {
      return [
        'full_name' => $participant->user->mus_user_last_name . " " . $participant->user->mus_user_first_name,
        'user_id' => $participant->user->mus_user_id,
      ];
    });

    return view('admin.event.detail', compact('event', 'participants'));
  }
}
