<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">会員証</h2>
                <p>名前：{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}</p>
                <p>大学：{{ $user->mus_current_university }}</p>
                <p>会員番号：{{ $user->mus_user_id }}</p>
                <a href="{{ route('mypage.plan.profileEdit') }}">編集ボタン</a>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">専属メンター情報</h2>
                <p>氏名：{{ $user->dedicatedMentor->mme_last_name ?? 'なし' }}{{ $user->dedicatedMentor->mme_first_name ?? 'なし' }}
                </p>
                <p>メンターLINE URL：{{ $user->dedicatedMentor->mme_line_url ?? 'なし' }}</p>
                <p>TimeRex URL：{{ $user->dedicatedMentor->mme_timerex_url ?? 'なし' }}</p>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">参加回数</h2>
                <ul>
                    <li>面談枠：{{ $user->userDetail->tud_interview_count_remaining ?? 'なし' }}</li>
                    <li>イベント枠：{{ $user->userDetail->tud_event_attendance_remaining ?? 'なし' }}</li>
                    <li>ES添削枠：{{ $user->userDetail->tud_es_count_remaining ?? 'なし' }}</li>
                    <li>ケース添削枠：{{ $user->userDetail->tud_case_study_count_remaining ?? 'なし' }}</li>
                </ul>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">累積添削回数</h2>
                <p>後に実装</p>
            </div>

            <a href="{{ route('mypage.index') }}">戻る</a>

        </div>
    </div>
</x-app-layout>
