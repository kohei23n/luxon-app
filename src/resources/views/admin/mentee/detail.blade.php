@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('メンティー面談情報') }}
        </h2>
    </x-slot>

    <div class="admin-container">
        <h1>今月の予約面談</h1>

        <p>今月の残り面談回数：{{ $user->userDetail->tud_interview_count_remaining }}</p>

        <p>予約済み面談：</p>
        @forelse ($interviews as $key => $interview)
            <div class="admin-container">
                <p>担当メンター：{{ $interview->mentor->mus_user_last_name }}</p>
                <p>{{ $key + 1 }}回目：{{ $interview->tin_datetime }}</p>
                <p>面談時間：{{ $interview->tin_time }}分</p>
            </div>
            @empty
                <p>なし</p>
        @endforelse
    </div>

    <a href="{{ route('admin.menteeIndex') }}" class="back-button">戻る</a>
    </div>
</x-app-layout>
