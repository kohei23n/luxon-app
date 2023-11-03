<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('イベント予約') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <h1>{{ $event->mev_event_name }}</h1>

            <h2>{{ $event->mev_event_overview }}</h2>

            <p>{{ $event->mev_event_datetime }}</p>
            <p>{{ $event->mev_event_description }}</p>

            @if ($isAlreadyBooked)
                <p>このイベントはすでに予約されています。</p>
            @elseif ($count->tud_event_attendance_remaining <= 0)
                <p>イベント枠がありません</p>
            @else
                <a href="{{ route('reserve.eventAdd', $event->mev_event_id) }}">予約</a>
            @endif

            <p>チケット：{{ $count->tud_event_attendance_remaining }}</p>
            <a href="{{ route('reserve.eventIndex') }}">戻る</a>
        </div>
    </div>
</x-app-layout>
