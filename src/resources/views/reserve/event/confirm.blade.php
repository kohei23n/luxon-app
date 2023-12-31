@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/event.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('予約確認') }}
        </h2>
    </x-slot>

    <div>
        <p class="counter">イベントチケット数：{{ $count->tud_event_attendance_remaining }}</p>
        <p class="counter">面談チケット数：{{ $count->tud_interview_count_remaining }}</p>

        <div class="event-detail">
            <h1>イベント名：{{ $event->mev_event_name }}</h1>

            <h2>概要：{{ $event->mev_event_overview }}</h2>

            <p>開催日：{{ $event->mev_event_datetime }}</p>
            <p>詳細：{{ $event->mev_event_description }}</p>

            <form action="{{ route('reserve.eventCreate', $event->mev_event_id) }}" method="post">
                @csrf
                <input type="hidden" name="mev_event_id" value="{{ $event->mev_event_id }}">
                <button type="submit" class="add-button">予約を確定する</button>
            </form>
        </div>
        <a href="{{ route('reserve.eventShow', $event->mev_event_id) }}" class="back-button">戻る</a>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
