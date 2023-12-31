@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/ticket.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('チケット申請') }}
        </h2>
    </x-slot>
    <div class="ticket-container">
        <p>現在のチケット数</p>
        <ul class="ticket-manager text-xs">
            <li>イベントチケット：{{ $count->tud_event_attendance_remaining }}</li>
            <li>面談チケット：{{ $count->tud_interview_count_remaining }}</li>
            <li>ES添削チケット：{{ $count->tud_es_count_remaining }}</li>
            <li>ケース添削チケット：{{ $count->tud_case_study_count_remaining }}</li>
        </ul>

        <form method="post" action="{{ route('reserve.ticketUpdate') }}">
            @csrf
            @method('post')

            <!-- イベント参加チケット -->
            <div class="add-ticket">
                <label class="ticket-name" for="tud_event_attendance_remaining">イベントチケット追加</label>
                <input type="number" class="input-box" id="tud_event_attendance_remaining"
                    name="tud_event_attendance_remaining">
                <label for="tud_es_count_remaining"> 枚</label>
                <x-input-error :messages="$errors->get('tud_event_attendance_remaining')" />
            </div>

            <!-- 面談チケット -->
            <div class="add-ticket">
                <label class="ticket-name" for="tud_interview_count_remaining">面談チケット追加</label>
                <input type="number" class="input-box" id="tud_interview_count_remaining"
                    name="tud_interview_count_remaining">
                <label for="tud_es_count_remaining"> 枚</label>
                <x-input-error :messages="$errors->get('tud_interview_count_remaining')" />
            </div>

            <!-- ES添削チケット -->
            <div class="add-ticket">
                <label class="ticket-name" for="tud_es_count_remaining">ES添削チケット追加</label>
                <input type="number" class="input-box" id="tud_es_count_remaining" name="tud_es_count_remaining">
                <label for="tud_es_count_remaining"> 枚</label>
                <x-input-error :messages="$errors->get('tud_es_count_remaining')" />
            </div>

            <!-- ケース添削チケット -->
            <div class="add-ticket">
                <label class="ticket-name" for="tud_case_study_count_remaining">ケース添削チケット追加</label>
                <input type="number" class="input-box" id="tud_case_study_count_remaining"
                    name="tud_case_study_count_remaining">
                <label for="tud_es_count_remaining"> 枚</label>
                <x-input-error :messages="$errors->get('tud_case_study_count_remaining')" />
            </div>

            <button type="submit" class="add-button">申請</button>
            <a href="{{ route('reserve.eventIndex') }}" class="back-button">戻る</a>
        </form>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
