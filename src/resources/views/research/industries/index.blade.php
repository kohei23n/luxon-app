@section('head')
    <link rel="stylesheet" href="{{ asset('css/research/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('業界一覧') }}
        </h2>
    </x-slot>

    <div>
        @foreach ($industries as $industry)
            <a href="{{ route('research.companiesIndex', $industry->min_industry_id) }}"
                class="industry-link">{{ $industry->min_industry_name }}</a>
        @endforeach
        @if (!$user->isMentor)
            <a href="{{ route('research.index') }}" class="back-button">戻る</a>
        @else
            <a href="{{ route('mentor.index') }}" class="back-button">戻る</a>
        @endif
    </div>

    @if (!$user->isMentor)
        {{-- メニューバー --}}
        <div class="list-box">
            <x-menubar />
        </div>
    @endif
</x-app-layout>
