@section('head')
    <link rel="stylesheet" href="{{ asset('css/research.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('選考詳細') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="heading">{{ $industry->mco_company_name }}の選考詳細一覧</h1>

                @foreach ($selections as $phaseName => $details)
                    <h2 class="phase-heading">選考段階：{{ $phaseName }}</h2>

                    @foreach ($details as $detail)
                        <div class="selection-detail">
                            <p>{{ $detail->msd_selection_detail }}</p>
                        </div>
                    @endforeach
                @endforeach

                <a href="{{ route('research.selectionsAdd', $id) }}" class="bottom-link">新しい情報を追加する</a>
                <a href="{{ route('research.companiesIndex', $industry->mco_industry_id) }}" class="bottom-link">戻る</a>
            </div>
        </div>
    </div>
</x-app-layout>
