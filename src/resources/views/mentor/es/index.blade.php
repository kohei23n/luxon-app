@section('head')
    <link rel="stylesheet" href="{{ asset('css/mentor/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ES一覧') }}
        </h2>
    </x-slot>

    <h3 class="mentor-title">返却前</h3>
    @forelse ($entrySheets as $entrySheet)
        <div class="mentor-container">
            <a href="{{ route('mentor.esEdit', $entrySheet->tes_es_id) }}">
                <p>提出者：{{ $entrySheet->user->mus_user_last_name }}{{ $entrySheet->user->mus_user_first_name }}</p>
                <p>会社名：{{ $entrySheet->tes_company_name }}</p>
            </a>
        </div>
    @empty
        <div class="mentor-container">
            <p>現在、返却前のESはありません。</p>
        </div>
    @endforelse
    <h3 class="mentor-title">返却済み</h3>
    @forelse ($returnedSheets as $returnedSheet)
        <div class="mentor-container">
            <p>提出者：{{ $returnedSheet->user->mus_user_last_name }}{{ $returnedSheet->user->mus_user_first_name }}
            </p>
            <p>会社名：{{ $returnedSheet->tes_company_name }}</p>
        </div>
    @empty
        <div class="mentor-container">
            <p>現在、返却済みのESはありません。</p>
        </div>
    @endforelse
    <a href="{{ route('mentor.index') }}" class="back-button">戻る</a>
</x-app-layout>
