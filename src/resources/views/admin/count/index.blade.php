<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('面談枠情報') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <div>
                <div>
                    @foreach ($users as $user)
                        <p>{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}</p>
                        <a href="{{ route('admin.countEdit', $user->mus_user_id) }}">編集</a>
                        <br><br>
                        {{-- <ul>
                            <li>面談枠：{{ $user->userDetail->tud_interview_count_remaining }}</li>
                            <li>イベント枠：{{ $user->userDetail->tud_event_attendance_remaining }}</li>
                            <li>ES添削枠：{{ $user->userDetail->tud_es_count_remaining }}</li>
                            <li>ケース添削枠：{{ $user->userDetail->tud_case_study_count_remaining }}</li>
                        </ul> --}}
                    @endforeach
                    <a href="{{ route('admin.index') }}">戻る</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
