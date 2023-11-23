@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/count.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('チケット申請') }}
        </h2>
    </x-slot>
    <div>
        <p>現在のチケット数</p>
        <ul>
            <li>面談枠：{{ $count->tud_interview_count_remaining }}</li>
            <li>イベント枠：{{ $count->tud_event_attendance_remaining }}</li>
            <li>ES添削枠：{{ $count->tud_es_count_remaining }}</li>
            <li>ケース添削枠：{{ $count->tud_case_study_count_remaining }}</li>
        </ul>

        <form method="post" action="{{ route('admin.countUpdate', $id) }}">
            @csrf
            @method('patch')

            <!-- 面談枠 -->
            <div>
                <label for="tud_interview_count_remaining">面談枠追加</label>
                <input type="number" id="tud_interview_count_remaining" name="tud_interview_count_remaining">
                <x-input-error :messages="$errors->get('tud_interview_count_remaining')" />
            </div>

            <!-- イベント参加枠 -->
            <div>
                <label for="tud_event_attendance_remaining">イベント枠追加</label>
                <input type="number" id="tud_event_attendance_remaining" name="tud_event_attendance_remaining">
                <x-input-error :messages="$errors->get('tud_event_attendance_remaining')" />
            </div>

            <!-- ES添削枠 -->
            <div>
                <label for="tud_es_count_remaining">ES添削枠追加</label>
                <input type="number" id="tud_es_count_remaining" name="tud_es_count_remaining">
                <x-input-error :messages="$errors->get('tud_es_count_remaining')" />
            </div>

            <!-- ケース添削枠 -->
            <div>
                <label for="tud_case_study_count_remaining">ケース添削枠追加</label>
                <input type="number" id="tud_case_study_count_remaining" name="tud_case_study_count_remaining">
                <x-input-error :messages="$errors->get('tud_case_study_count_remaining')" />
            </div>

            <div>
                <button type="submit">追加</button>

                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                        {{ __('Saved.') }}</p>
                @endif
            </div>
        </form>

        <a href="{{ route('admin.countIndex') }}">戻る</a>
    </div>
</x-app-layout>
