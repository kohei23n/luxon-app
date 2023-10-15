@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserving.css') }}">
@endsection

<x-app-layout>
    <div class="py-12">
        <div class="ticket-list">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <p>所持チケット</p>
                <ul>
                    <li>面談枠：{{ $plan->tsp_interview_count }}</li>
                    <li>イベント枠：{{ $plan->tsp_event_attendance }}</li>
                    <li>ES添削枠：{{ $plan->tsp_es_count }}</li>
                    <li>ケース添削枠：{{ $plan->tsp_case_study_count }}</li>
                </ul>
            </div>
        </div>

        <div class="reserving-list">
            <div class="reserving-box">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('reserve.interviewIndex') }}">面談予約</a>
                </div>
            </div>
            <div class="reserving-box">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('reserve.eventIndex') }}">イベント予約</a>
                </div>
            </div>
            <div class="box-bottom">
                <div class="reserving-box-mini">
                    <div class="p-6 text-gray-900">
                        <a href="{{ route('reserve.esAdd') }}">ES添削</a>
                    </div>
                </div>
                <div class="reserving-box-mini">
                    <div class="p-6 text-gray-900">
                        <a href="{{ route('reserve.caseAdd') }}">ケース添削</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list-box">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="btn-list">
                <a class="btn" href="">
                    <img src="{{ asset('images/selection-preparetion.png') }}" alt="Image Description"
                        style="width:78px; height:78px;">選考対策</a>
                <a class="btn" href="{{ route('research.index') }}">
                    <img src="{{ asset('images/research-industry.png') }}" alt="Image Description"
                        style="width:78px; height:78px;">業界研究</a>
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
