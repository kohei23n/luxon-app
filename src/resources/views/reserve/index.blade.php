@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/home.css') }}">
@endsection
<x-app-layout>
    <x-slot name="header" class="reserve-header">
        <h2>
            {{ __('イベント予約') }}
        </h2>
        <ul class="flex text-xs justify-between mt-2">
            <li>面談枠：{{ $count->tud_interview_count_remaining }}</li>
            <li>イベント枠：{{ $count->tud_event_attendance_remaining }}</li>
            <li>ES添削枠：{{ $count->tud_es_count_remaining }}</li>
            <li>ケース添削枠：{{ $count->tud_case_study_count_remaining }}</li>
        </ul>
    </x-slot>

    <div class="reserve-container">
        <div class="reserving-list">
            <div class="reserving-box" onclick="window.location.href = '{{ route('reserve.interviewIndex') }}';" style="cursor: pointer;">
            面談予約
            </div>
            <div class="reserving-box" onclick="window.location.href = '{{ route('reserve.eventIndex') }}';" style="cursor: pointer;">
            イベント予約
            </div>

            <div class="reserving-box" onclick="window.location.href = '{{ route('reserve.esAdd') }}';" style="cursor: pointer;">
             ES添削
            </div>
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
