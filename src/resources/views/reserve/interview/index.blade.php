@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/interview.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('面談予約') }}
        </h2>
    </x-slot>

    <div class="mentor-details">
        <h2>メンター情報</h2>
        <p class="mentor-name">メンター：{{ $mentor->mus_user_last_name }}{{ $mentor->mus_user_first_name }}</p>
        <p class="mentor-line">メンターLINE：{{ $mentor->mentorProfile->mme_line_url }}</p>
        <p class="mentor-reserve">面談予約URL：{{ $mentor->mentorProfile->mme_timerex_url }}</p>
        <div class="btn-box">
        <a href="{{ route('reserve.index') }}" class="mentor-back-button">戻る</a>
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
