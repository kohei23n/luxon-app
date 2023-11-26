@section('head')
    <link rel="stylesheet" href="{{ asset('css/research/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('企業一覧') }}
        </h2>
    </x-slot>

    <div>
        @foreach ($companies as $company)
            <a href="{{ route('research.selectionsIndex', $company->mco_company_id) }}"
                class="industry-link">{{ $company->mco_company_name }}</a>
        @endforeach
        <a href="{{ route('research.industriesIndex') }}" class="back-button">戻る</a>
    </div>

    {{-- メニューバー --}}
    @if (!$user->isMentor)
        {{-- メニューバー --}}
        <div class="list-box">
            <x-menubar />
        </div>
    @endif
</x-app-layout>
