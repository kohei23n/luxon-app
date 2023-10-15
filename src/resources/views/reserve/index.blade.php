<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Top') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>所持チケット</h1>
                    <ul>
                        <li>面談枠：{{ $plan->tsp_interview_count }}</li>
                        <li>イベント枠：{{ $plan->tsp_event_attendance }}</li>
                        <li>ES添削枠：{{ $plan->tsp_es_count }}</li>
                        <li>ケース添削枠：{{ $plan->tsp_case_study_count }}</li>
                    </ul>
                    <a href="{{ route('reserve.interviewIndex') }}">面談予約</a>
                    <a href="{{ route('reserve.eventIndex') }}">イベント予約</a>
                    <a href="{{ route('reserve.esAdd') }}">ES添削</a>
                    <a href="{{ route('reserve.caseAdd') }}">ケース添削</a>

                    <a href="{{ route('index') }}">戻る</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
