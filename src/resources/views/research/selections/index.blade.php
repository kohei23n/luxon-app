@section('head')
    <link rel="stylesheet" href="{{ asset('css/research.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('選考詳細') }}：{{ $industry->mco_company_name }}
        </h2>
    </x-slot>
    <div>
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
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
