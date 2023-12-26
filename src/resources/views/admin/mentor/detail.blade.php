@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('メンター面談情報') }}
        </h2>
    </x-slot>

    <div class="admin-container">

        <p>今月の予約済み面談：</p>
        @forelse ($bookedInterviews as $key => $bookedInterview)
            <div class="admin-container">
                <p>メンティー：{{ $bookedInterview->user->mus_user_last_name }}</p>
                <p>{{ $key + 1 }}回目：{{ $bookedInterview->tin_datetime }}</p>
                <p>面談時間：{{ $bookedInterview->tin_time }}分</p>
            </div>
            @empty
                <p>なし</p>
        @endforelse

        <p>今月の実施済み面談：</p>
        @forelse ($completedInterviews as $key => $completedInterview)
            <div class="admin-container">
                <p>メンティー：{{ $completedInterview->user->mus_user_last_name }}</p>
                <p>{{ $key + 1 }}回目：{{ $completedInterview->tin_datetime }}</p>
                <p>面談時間：{{ $completedInterview->tin_time }}分</p>
            </div>
            @empty
                <p>なし</p>
        @endforelse
    </div>

    <a href="{{ route('admin.mentorIndex') }}" class="back-button">戻る</a>
    </div>
</x-app-layout>
