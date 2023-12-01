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
            <div class="alert-message">
                {{ session('status') ?: session('error') }}
            </div>
        @endif

        <p class="counter">イベントチケット数：{{ $count->tud_event_attendance_remaining }}</p>
        <p class="counter">面談チケット数：{{ $count->tud_interview_count_remaining }}</p>

        <div class="event-detail">
            <h1>イベント名：{{ $event->mev_event_name }}</h1>

            <h2>概要：{{ $event->mev_event_overview }}</h2>

            <p>開催日：{{ $event->mev_event_datetime }}</p>
            <p>詳細：{{ $event->mev_event_description }}</p>

            @if ($isAlreadyBooked)
                <a href="{{ $event->mev_event_participate_url }}">URL：{{ $event->mev_event_participate_url }}</a>
                <p>ステータス：このイベントはすでに予約されています。</p>
            @else
                @if ($count->tud_event_attendance_remaining <= 0 && $count->tud_interview_count_remaining <= 0)
                    <p>チケットがありません。</p>
                @elseif ($count->tud_event_attendance_remaining <= 0 && $count->tud_interview_count_remaining > 0 && !$isTemporaryReservationEnabled)
                    <p>イベントチケットがありません。面談チケットを消費して参加できます。</p>
                    <a href="{{ route('reserve.eventAdd', $event->mev_event_id) }}" class="add-button">予約</a>
                @elseif ($count->tud_event_attendance_remaining <= 0 && $count->tud_interview_count_remaining > 0 && $isTemporaryReservationEnabled)
                    <p>イベントチケットがありません。面談チケットを消費して参加できます。</p>
                    <a href="{{ route('reserve.eventAdd', $event->mev_event_id) }}" class="add-button">予約</a>
                @elseif ($isTemporaryReservationEnabled)
                    <a href="{{ route('reserve.eventAdd', $event->mev_event_id) }}" class="add-button">仮予約</a>
                @else
                    <a href="{{ route('reserve.eventAdd', $event->mev_event_id) }}" class="add-button">予約</a>
                @endif
            @endif
        </div>
        <a href="{{ route('reserve.eventIndex') }}" class="back-button">戻る</a>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
