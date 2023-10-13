<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('予約確認') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1>{{ $event->mev_event_name }}</h1>

            <h1>{{ $event->mev_event_overview }}</h1>

            <p>{{ $event->mev_event_datetime }}</p>
            <p>{{ $event->mev_event_description }}</p>

            <form action="{{ route('reserve.eventCreate', $event->mev_event_id) }}" method="post">
                @csrf
                <input type="hidden" name="mev_event_id" value="{{ $event->mev_event_id }}">
                <button type="submit">予約を確定する</button>
            </form>

            <p>チケット：{{ $plan->tsp_event_attendance }}</p>
            <a href="{{ route('reserve.eventShow') }}">戻る</a>
        </div>
    </div>
</x-app-layout>
