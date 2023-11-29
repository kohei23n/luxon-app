@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/event.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('イベント予約') }}
        </h2>
    </x-slot>

    <div class="container">
        @if (session('status') || session('error'))
            <div class="alert {{ session('status') ? 'alert-success' : 'alert-danger' }}">
                {{ session('status') ?: session('error') }}
            </div>
        @endif

        <p class="counter">所持チケット数：{{ $count->tud_event_attendance_remaining }}</p>

        <div class="event-detail">
            <h1>イベント名：{{ $event->mev_event_name }}</h1>

            <h2>概要：{{ $event->mev_event_overview }}</h2>

            <p>開催日：{{ $event->mev_event_datetime }}</p>
            <p>詳細：{{ $event->mev_event_description }}</p>

            @if ($isAlreadyBooked)
                <a href={{ $event->mev_event_participate_url }}>URL：{{ $event->mev_event_participate_url }}</a>
                <p>ステータス：このイベントはすでに予約されています。</p>
            @elseif ($count->tud_event_attendance_remaining <= 0 && $count->tud_interview_count_remaining > 0)
                <p>イベントチケットがありません。面談チケットを消費して参加できます。</p>
            @elseif ($count->tud_event_attendance_remaining <= 0 && $count->tud_interview_count_remaining <= 0)
                <p>チケットがありません。</p>
            @elseif ($isTemporaryReservationEnabled)
                <a href="{{ route('reserve.eventAdd', $event->mev_event_id) }}" class="confirm-btn">仮予約</a>
            @else
                <a href="{{ route('reserve.eventAdd', $event->mev_event_id) }}" class="confirm-btn">予約</a>
            @endif
        </div>
        <a href="{{ route('reserve.eventIndex') }}" class="back-button">戻る</a>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
