<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('イベント予約') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
