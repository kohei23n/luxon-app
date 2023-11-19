@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/interview.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('面談予約') }}
        </h2>
    </x-slot>

    <div class="mentor-information">
        <h2>専属メンター情報</h2>
        <p>氏名：{{ $user->dedicatedMentor->mus_user_last_name ?? 'なし' }}{{ $user->dedicatedMentor->mus_user_first_name ?? 'なし' }}
        </p>
        <p>リンク：</p>
        <div class="mentor-links">
            <a href="{{ $user->dedicatedMentor->mentorProfile->mme_line_url }}">
                <img src="{{ asset('images/line.png') }}" alt="Image Description">
            </a>
            <a href="{{ $user->dedicatedMentor->mentorProfile->mme_timerex_url }}">
                <img src="{{ asset('images/timerex.png') }}" alt="Image Description">
            </a>
        </div>
    </div>

    <div class="interview-information">
        <h2>予約面談一覧</h2>
        @foreach ($interviews as $interview)
            <div class="interview-reserved">
                <p>担当メンター：{{ $interview->mentor->mus_user_last_name }}</p>
                <p>面談日時：{{ $interview->tin_datetime }}</p>
                <p>面談時間：{{ $interview->tin_time }}分</p>
                <form action="{{ route('reserve.interviewUpdate', $interview->tin_interview_id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <p>ステータス：{{ $interview->tin_is_completed ? '完了' : '未完了' }}</p>
                    <button type="submit" class="button-blue">{{ $interview->tin_is_completed ? '未完了にする' : '完了にする' }}</button>
                </form>
            </div>
        @endforeach
        <a href="{{ route('reserve.interviewAdd') }}">新しい面談日時を登録する</a>
    </div>

    <a href="{{ route('reserve.index') }}" class="mentor-back-button">戻る</a>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
