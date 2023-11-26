@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/home.css') }}">
@endsection
<x-app-layout>
    <x-slot name="header" class="reserve-header">
        <h2>
            {{ __('予約') }}
        </h2>
    </x-slot>

    <div class="container">
        <ul class="flex gap-4 justify-center">
            <li>面談チケット：{{ $count->tud_interview_count_remaining }}</li>
            <li>イベントチケット：{{ $count->tud_event_attendance_remaining }}</li>
            <li>ES添削チケット：{{ $count->tud_es_count_remaining }}</li>
        </ul>
        <div class="menu-list">
            <div class="menu-item" onclick="window.location.href = '{{ route('reserve.interviewIndex') }}';"
                style="cursor: pointer;">
                面談予約
            </div>
            <div class="menu-item" onclick="window.location.href = '{{ route('reserve.eventIndex') }}';"
                style="cursor: pointer;">
                イベント予約
            </div>

            <div class="menu-item" onclick="window.location.href = '{{ route('reserve.esAdd') }}';"
                style="cursor: pointer;">
                ES添削
            </div>
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
