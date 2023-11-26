@section('head')
    <link rel="stylesheet" href="{{ asset('css/mentor/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ケース一覧') }}
        </h2>
    </x-slot>

    <h3 class="mentor-title">返却前</h3>
    @forelse ($cases as $case)
        <div class="mentor-container">
            <a href="{{ route('mentor.caseEdit', $case->tca_case_id) }}">
                <p>提出者：{{ $case->user->mus_user_last_name }}{{ $case->user->mus_user_first_name }}</p>
                <p>設問：{{ $case->tca_case_content }}</p>
            </a>
        </div>
    @empty
        <div class="mentor-container">
            <p>現在、返却前のケースはありません。</p>
        </div>
    @endforelse
    <h3 class="mentor-title">返却済み</h3>
    @forelse ($returnedCases as $returnedCase)
        <div class="mentor-container">
            <p>提出者：{{ $returnedCase->user->mus_user_last_name }}{{ $returnedCase->user->mus_user_first_name }}
            </p>
            <p>会社名：{{ $returnedCase->tca_case_content }}</p>
        </div>
    @empty
        <div class="mentor-container">
            <p>現在、返却済みのケースはありません。</p>
        </div>
    @endforelse
    <a href="{{ route('mentor.index') }}" class="back-button">戻る</a>
</x-app-layout>
