@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/event.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('イベント予約') }}
        </h2>
    </x-slot>

    <div>
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
            <p>URL：{{ $event->mev_event_participate_url }}</p>
        

            @if ($isAlreadyBooked)
                <p>ステータス：このイベントはすでに予約されています。</p>
            @elseif ($count->tud_event_attendance_remaining <= 0)
                <p>イベントチケットがありません</p>
            @elseif ($isTemporaryReservationEnabled)
                <a href="{{ route('reserve.eventAdd', $event->mev_event_id) }}" class="confirm-btn">仮予約</a>
            @else
                <a href="{{ route('reserve.eventAdd', $event->mev_event_id) }}" class="confirm-btn">予約</a>
            @endif
        </div>
        <div class="btn-box">
            <a href="{{ route('reserve.eventIndex') }}">戻る</a>
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
