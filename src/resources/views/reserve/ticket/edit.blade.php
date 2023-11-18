@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/ticket.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('チケット申請') }}
        </h2>
    </x-slot>
    <div>
        <div class="ticket-container">

            <p>現在のチケット数</p>
            <ul class="ticket-manerger">
                <li>イベント枠：{{ $count->tud_event_attendance_remaining }}</li>
                <li>面談枠：{{ $count->tud_interview_count_remaining }}</li>
                <li>ES添削枠：{{ $count->tud_es_count_remaining }}</li>
                <li>ケース添削枠：{{ $count->tud_case_study_count_remaining }}</li>
            </ul>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('reserve.ticketUpdate') }}">
                @csrf
                @method('post')

                <!-- イベント参加枠 -->
                <div class="add-ticket">
                    <label class="ticket-name" for="tud_event_attendance_remaining">イベント枠追加</label>
                    <input type="number" class="input-box" id="tud_event_attendance_remaining" name="tud_event_attendance_remaining" >
                    <label for="tud_es_count_remaining"> 枚</label>
                    <x-input-error :messages="$errors->get('tud_event_attendance_remaining')" />
                </div>

                <!-- 面談枠 -->
                <div class="add-ticket">
                    <label  class="ticket-name" for="tud_interview_count_remaining">面談枠追加</label>
                    <input type="number" class="input-box" id="tud_interview_count_remaining" name="tud_interview_count_remaining" >
                    <label for="tud_es_count_remaining"> 枚</label>
                    <x-input-error :messages="$errors->get('tud_interview_count_remaining')" />
                </div>

                <!-- ES添削枠 -->
                <div class="add-ticket">
                    <label class="ticket-name" for="tud_es_count_remaining">ES添削枠追加</label>
                    <input type="number" class="input-box" id="tud_es_count_remaining" name="tud_es_count_remaining" >
                    <label for="tud_es_count_remaining"> 枚</label>
                    <x-input-error :messages="$errors->get('tud_es_count_remaining')" />
                </div>

                <!-- ケース添削枠 -->
                <div class="add-ticket">
                    <label class="ticket-name" for="tud_case_study_count_remaining">ケース添削枠追加</label>
                    <input type="number" class="input-box" id="tud_case_study_count_remaining" name="tud_case_study_count_remaining" >
                    <label for="tud_es_count_remaining"> 枚</label>
                    <x-input-error :messages="$errors->get('tud_case_study_count_remaining')" />
                </div>

                <div class="btn-box">
                    <button type="submit">申請</button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                            {{ __('Saved.') }}</p>
                    @endif
                    <div class="bk-btn-box">
                    <a href="{{ route('reserve.eventIndex') }}">戻る</a>
                    </div>
                </div>
            </form>


        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
