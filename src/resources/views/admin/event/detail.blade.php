<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('イベント予約') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>イベント名：{{ $event->mev_event_name }}</h1>

            <h2>イベント概要：{{ $event->mev_event_overview }}</h2>
            <h2>イベント詳細：{{ $event->mev_event_description }}</h2>

            <p>イベント日時：{{ $event->mev_event_datetime }}</p>

            <p>参加者一覧</p>
            <ul>
                @foreach ($participants as $participant)
                    <li>{{ $participant['full_name'] }}（ID: {{ $participant['user_id'] }}）</li>
                @endforeach
            </ul>

            <a href="{{ route('admin.eventIndex') }}">戻る</a>
        </div>
    </div>
</x-app-layout>
