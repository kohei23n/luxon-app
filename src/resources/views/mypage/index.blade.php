@section('head')
    <link rel="stylesheet" href="{{ asset('css/mypage/plan.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <div class="container">

        @if (session('status') || session('error'))
            <div class="alert-message">
                {{ session('status') ?: session('error') }}
            </div>
        @endif

        <div class="mypage-container">
            <h2 class="font-bold">会員証</h2>
            <p>会員ID：{{ $user->mus_user_id }}</p>
            <p>名前：{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}</p>
            <p>大学：{{ $user->userDetail->tud_current_university }}</p>
            <p>第一志望業界：{{ $user->userDetail->tud_first_industry_preference }}</p>
            <p>第二志望業界：{{ $user->userDetail->tud_second_industry_preference }}</p>
            <a href="{{ route('mypage.plan.profileEdit') }}" class="add-button">編集</a>
        </div>

        <div class="mypage-container">
            <h2 class="font-bold">専属メンター情報</h2>
            <p>氏名：{{ $user->dedicatedMentor->mus_user_last_name ?? 'なし' }}{{ $user->dedicatedMentor->mus_user_first_name ?? 'なし' }}
            </p>
            <p>リンク：</p>
            <div class="mentor-links">
                <a href="{{ $user->dedicatedMentor->mentorProfile->mme_line_url }}" target="_blank">
                    <img src="{{ asset('images/line.png') }}" alt="Image Description">
                </a>
                <a href="{{ $user->dedicatedMentor->mentorProfile->mme_timerex_url }}" target="_blank">
                    <img src="{{ asset('images/timerex-60.jpg') }}" alt="Image Description">
                </a>
                <a href="{{ $user->dedicatedMentor->mentorProfile->mme_timerex_url_short }}" target="_blank">
                    <img src="{{ asset('images/timerex-20.jpg') }}" alt="Image Description">
                </a>
            </div>
        </div>

        <div class="mypage-container">
            <h2 class="font-bold">参加回数</h2>
            <ul>
                <li>面談チケット：{{ $user->userDetail->tud_interview_count_remaining ?? 'なし' }}</li>
                <li>イベントチケット：{{ $user->userDetail->tud_event_attendance_remaining ?? 'なし' }}</li>
                <li>ES添削チケット：{{ $user->userDetail->tud_es_count_remaining ?? 'なし' }}</li>
                <li>ケース添削チケット：{{ $user->userDetail->tud_case_study_count_remaining ?? 'なし' }}</li>
            </ul>
        </div>

        <div class="mypage-container">
            <h2 class="font-bold">累積添削回数</h2>
            <p>COMING SOON</p>
        </div>

        <a href="{{ route('index') }}" class="back-button">戻る</a>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
