@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserving.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('面談予約') }}
        </h2>
    </x-slot>

    <div class="mentor-details">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mentor-name">メンター：{{ $mentor->mus_user_last_name }}{{ $mentor->mus_user_first_name }}</p>
                    <p class="mentor-line">メンターLINE：{{ $mentor->mentorProfile->mme_line_url }}</p>
                    <p class="mentor-reserve">面談予約URL：{{ $mentor->mentorProfile->mme_timerex_url }}</p>
                    <a href="{{ route('reserve.index') }}" class="mentor-back-button">戻る</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
