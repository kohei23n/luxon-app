@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserving.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
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

    <div class="py-6" style="margin-bottom:70px;">
        <div class="reserving-list">
            <div class="reserving-box">
                <a href="{{ route('reserve.interviewIndex') }}">面談予約</a>
            </div>
            <div class="reserving-box">
                <a href="{{ route('reserve.eventIndex') }}">イベント予約</a>
            </div>
            <div class="reserving-box">
                <a href="{{ route('reserve.esAdd') }}">ES添削</a>
            </div>
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
