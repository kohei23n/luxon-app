<?php

namespace App\Http\Controllers\Reserve\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;

class ShowController extends Controller
{
  public function __invoke($id)
  {
    $event = Event::findOrFail($id);

    $user = auth()->user();

    $plan = auth()->user()->servicePlan;
    $isAlreadyBooked = $user->eventParticipants()
      ->where('tep_event_id', $event->mev_event_id)
      ->exists();

    return view('reserve.event.detail', compact('event', 'plan', 'isAlreadyBooked'));
  }
}
