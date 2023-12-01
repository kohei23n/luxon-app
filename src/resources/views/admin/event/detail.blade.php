@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('イベント予約') }}
        </h2>
    </x-slot>

    <div class="admin-container">
        @if (session('status') || session('error'))
            <div class="alert-message">
                {{ session('status') ?: session('error') }}
            </div>
        @endif

        <h1>イベント名：{{ $event->mev_event_name }}</h1>

        <h2>イベント概要：{{ $event->mev_event_overview }}</h2>
        <h2>イベント詳細：{{ $event->mev_event_description }}</h2>

        <p>イベント日時：{{ $event->mev_event_datetime }}</p>

        @if ($participantsConfirmed)
            <p>参加者一覧</p>
        @else
            <p>仮予約者一覧</p>
        @endif
        <ul>
            @forelse ($participants as $participant)
                <li>{{ $participant['full_name'] }}（ID: {{ $participant['user_id'] }}）</li>
            @empty
                <li>なし</li>
            @endforelse
        </ul>

        <a href="{{ route('admin.eventEdit', $event->mev_event_id) }}" class="add-button">編集</a>
        @if ($isTemporaryReservationEnabled && !$participantsConfirmed)
            <a href="{{ route('admin.eventConfirm', $event->mev_event_id) }}" class="add-button">予約者を確定する</a>
        @endif
        <a href="{{ route('admin.eventIndex') }}" class="back-button">戻る</a>
    </div>
</x-app-layout>
