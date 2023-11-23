@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/event.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('イベント予約') }}
        </h2>
    </x-slot>

    <div>
        <h1>イベント名：{{ $event->mev_event_name }}</h1>

        <h2>イベント概要：{{ $event->mev_event_overview }}</h2>
        <h2>イベント詳細：{{ $event->mev_event_description }}</h2>

        <p>イベント日時：{{ $event->mev_event_datetime }}</p>

        <p>参加者一覧</p>
        <ul>
            @forelse ($participants as $participant)
                <li>{{ $participant['full_name'] }}（ID: {{ $participant['user_id'] }}）</li>
            @empty
                <li>なし</li>
            @endforelse
        </ul>

        <a href="{{ route('admin.eventEdit', $event->mev_event_id) }}">編集</a>
        <a href="{{ route('admin.eventIndex') }}">戻る</a>
    </div>
</x-app-layout>
