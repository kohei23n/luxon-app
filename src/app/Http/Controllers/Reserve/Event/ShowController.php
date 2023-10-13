<?php

namespace App\Http\Controllers\Reserve\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventParticipant;

class ShowController extends Controller
{
  public function __invoke($id)
  {
    $event = Event::findOrFail($id);

    $user = auth()->user();
    $isAlreadyBooked = EventParticipant::where('tep_event_id', $event->mev_event_id)
      ->where('tep_user_id', $user->mus_user_id)
      ->exists();

    return view('reserve.event.detail', compact('event', 'isAlreadyBooked'));
  }
}
