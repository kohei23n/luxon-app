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
                <div>
                    <a href="{{ route('reserve.interviewIndex') }}">面談予約</a>
                </div>
            </div>
            <div class="reserving-box">
                <div>
                    <a href="{{ route('reserve.eventIndex') }}">イベント予約</a>
                </div>
            </div>
            <div class="box-bottom">
                <div class="reserving-box-mini">
                    <div>
                        <a href="{{ route('reserve.esAdd') }}">ES添削</a>
                    </div>
                </div>
                <div class="reserving-box-mini">
                    <div>
                        <a href="{{ route('reserve.caseAdd') }}">ケース添削</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed w-full left-0">
        <div>
            <div class="btn-list">
                <a class="btn" href="">
                    <img src="{{ asset('images/selection-preparation.png') }}" alt="Image Description"
                        style="width:78px; height:78px;">選考対策</a>
                <a class="btn" href="{{ route('research.index') }}">
                    <img src="{{ asset('images/research-industry.png') }}" alt="Image Description"
                        style="width:78px; height:78px;">選考情報</a>
                <a class="btn" href="{{ route('reserve.index') }}">
                    <img src="{{ asset('images/reserving.png') }}" alt="Image Description"
                        style="width:78px; height:78px;">予約</a>
                <a class="btn" href="{{ route('mypage.index') }}">
                    <img src="{{ asset('images/my-page.png') }}" alt="Image Description"
                        style="width:78px; height:78px;">マイページ</a>
            </div>
        </div>
    </div>
</x-app-layout>
