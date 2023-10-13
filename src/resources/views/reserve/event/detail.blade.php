<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('イベント予約') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>{{ $event->mev_event_name }}</h1>

            <h1>{{ $event->mev_event_overview }}</h1>

            <p>{{ $event->mev_event_datetime }}</p>
            <p>{{ $event->mev_event_description }}</p>

            @if ($isAlreadyBooked)
                <p>このイベントはすでに予約されています。</p>
            @else
                <a href="{{ route('reserve.eventAdd', $event->mev_event_id) }}">予約</a>
            @endif
        </div>
    </div>
</x-app-layout>
