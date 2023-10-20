@section('head')
    <link rel="stylesheet" href="{{ asset('css/research.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('選考情報') }}
        </h2>
    </x-slot>

    <div class="max-w-full mx-0 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="heading">業界一覧</h1>
                @foreach ($industries as $industry)
                    <a href="{{ route('research.companiesIndex', $industry->min_industry_id) }}"
                        class="industry-link">{{ $industry->min_industry_name }}</a>
                @endforeach
            </div>
            <a href="{{ route('index') }}" class="back-button">戻る</a>
        </div>
    </div>
</x-app-layout>
