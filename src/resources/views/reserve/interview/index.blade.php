@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/interview.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('面談予約') }}
        </h2>
    </x-slot>

    <div class="container">

        @if (session('status') || session('error'))
            <div class="alert-message">
                {{ session('status') ?: session('error') }}
            </div>
        @endif

        <div class="mentor-information">
            <h2>専属メンター情報</h2>
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

        <div class="interview-information">
            <h2>今月の予約面談一覧</h2>
            {{-- <a href="{{ route('reserve.ticketEdit') }}" class="ticket-link">チケットを増やす ></a> --}}
            @foreach ($interviews as $interview)
                <div class="interview-reserved">
                    <p>担当メンター：{{ $interview->mentor->mus_user_last_name }}</p>
                    <p>面談日時：{{ $interview->tin_datetime }}</p>
                    <p>面談時間：{{ $interview->tin_time }}分</p>
                    <p>ステータス：{{ $interview->tin_is_completed ? '完了' : '未完了' }}</p>
                    <a href="{{ route('reserve.interviewEdit', $interview->tin_interview_id) }}"
                        class="back-button">編集</a>
                    <form action="{{ route('reserve.interviewUpdateStatus', $interview->tin_interview_id) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit"
                            class="add-button">{{ $interview->tin_is_completed ? '未完了にする' : '完了にする' }}</button>
                    </form>
                </div>
            @endforeach
            <p class="counter">残りチケット：{{ $count->tud_interview_count_remaining }}</p>
            <a href="{{ route('reserve.interviewAdd') }}" class="add-button">新しい面談日時を登録する</a>
        </div>
        <a href="{{ route('reserve.index') }}" class="back-button">戻る</a>

    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
