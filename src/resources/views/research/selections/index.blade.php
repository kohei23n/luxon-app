@section('head')
    <link rel="stylesheet" href="{{ asset('css/research/selections.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('選考詳細') }}：{{ $industry->mco_company_name }}
        </h2>
    </x-slot>
    <div class="selection-container">
        @foreach ($selections as $phaseName => $details)
            <h2 class="phase-heading">選考段階：{{ $phaseName }}</h2>

            @foreach ($details as $detail)
                <div class="selection-detail">
                    <p>{!! nl2br(e($detail->msd_selection_detail)) !!}</p>
                </div>
            @endforeach
        @endforeach

        <a href="{{ route('research.selectionsAdd', $id) }}" class="add-button">新しい情報を追加する</a>
        <a href="{{ route('research.companiesIndex', $industry->mco_industry_id) }}" class="back-button">戻る</a>
    </div>
    {{-- メニューバー --}}
    @if (!$user->isMentor)
        {{-- メニューバー --}}
        <div class="list-box">
            <x-menubar />
        </div>
    @endif
</x-app-layout>
