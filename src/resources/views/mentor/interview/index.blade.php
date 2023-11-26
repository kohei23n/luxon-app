@section('head')
    <link rel="stylesheet" href="{{ asset('css/mentor/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('今月の面談一覧') }}
        </h2>
    </x-slot>

    @foreach ($interviews as $interview)
        <div class="mentor-container">
            <p>メンティー：{{ $interview->user->mus_user_last_name }}</p>
            <p>面談日時：{{ $interview->tin_datetime }}</p>
            <p>面談時間：{{ $interview->tin_time }}分</p>
        </div>
    @endforeach
    <a href="{{ route('mentor.index') }}" class="back-button">戻る</a>
</x-app-layout>
