@section('head')
    <link rel="stylesheet" href="{{ asset('css/research/companies.css') }}">
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
        <a href="{{ route('research.index') }}">戻る</a>
    </div>

    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
