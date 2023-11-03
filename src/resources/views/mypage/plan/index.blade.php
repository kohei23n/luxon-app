<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <div>

        <div>
            <h2>会員証</h2>
            <p>会員ID：{{ $user->mus_user_id }}</p>
            <p>名前：{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}</p>
            <p>大学：{{ $user->userDetail->tud_current_university }}</p>
            <a href="{{ route('mypage.plan.profileEdit') }}">編集ボタン</a>
        </div>

        <div>
            <h2>専属メンター情報</h2>
            <p>氏名：{{ $user->dedicatedMentor->mus_user_last_name ?? 'なし' }}{{ $user->dedicatedMentor->mus_user_first_name ?? 'なし' }}
            </p>
            <p>メンターLINE URL：{{ $user->dedicatedMentor->mentorProfile->mme_line_url ?? 'なし' }}</p>
            <p>TimeRex URL：{{ $user->dedicatedMentor->mentorProfile->mme_timerex_url ?? 'なし' }}</p>
        </div>

        <div>
            <h2>参加回数</h2>
            <ul>
                <li>面談枠：{{ $user->userDetail->tud_interview_count_remaining ?? 'なし' }}</li>
                <li>イベント枠：{{ $user->userDetail->tud_event_attendance_remaining ?? 'なし' }}</li>
                <li>ES添削枠：{{ $user->userDetail->tud_es_count_remaining ?? 'なし' }}</li>
                <li>ケース添削枠：{{ $user->userDetail->tud_case_study_count_remaining ?? 'なし' }}</li>
            </ul>
        </div>

        <div>
            <h2>累積添削回数</h2>
            <p>後に実装</p>
        </div>

        <a href="{{ route('mypage.index') }}">戻る</a>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
