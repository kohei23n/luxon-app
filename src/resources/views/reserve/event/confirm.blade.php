<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('予約確認') }}
        </h2>
    </x-slot>

    <div>
        <div>

            <h1>{{ $event->mev_event_name }}</h1>

            <h1>{{ $event->mev_event_overview }}</h1>

            <p>{{ $event->mev_event_datetime }}</p>
            <p>{{ $event->mev_event_description }}</p>

            <form action="{{ route('reserve.eventCreate', $event->mev_event_id) }}" method="post">
                @csrf
                <input type="hidden" name="mev_event_id" value="{{ $event->mev_event_id }}">
                <button type="submit">予約を確定する</button>
            </form>

            <p>チケット：{{ $count->tud_event_attendance_remaining }}</p>
            <a href="{{ route('reserve.eventShow', $event->mev_event_id) }}">戻る</a>
        </div>
    </div>
</x-app-layout>
