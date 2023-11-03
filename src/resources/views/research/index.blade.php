@section('head')
    <link rel="stylesheet" href="{{ asset('css/research.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('業界一覧') }}
        </h2>
    </x-slot>

    <div class="max-w-full mx-0 sm:px-6 lg:px-8">
        <div>
            <div>
                @foreach ($industries as $industry)
                    <a href="{{ route('research.companiesIndex', $industry->min_industry_id) }}"
                        class="industry-link">{{ $industry->min_industry_name }}</a>
                @endforeach
            </div>
            <a href="{{ route('index') }}" class="back-button">戻る</a>
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
