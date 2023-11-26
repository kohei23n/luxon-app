@section('head')
    <link rel="stylesheet" href="{{ asset('css/prep/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header" class="reserve-header">
        <h2>
            {{ __('選考対策トップ') }}
        </h2>
    </x-slot>
    <div class="container">
        <p class="counter">ケース添削チケット：{{ $count->tud_case_study_count_remaining }}</p>
        <div class="menu-list">
            <div class="menu-item" onclick="window.location.href = '{{ route('prep.caseAdd') }}';"
                style="cursor: pointer;">
                <a href="{{ route('prep.caseAdd') }}">ケース添削</a>
            </div>
            <div class="menu-item">
                <p>〜準備中〜</p>
            </div>
            <div class="menu-item">
                <p>〜準備中〜</p>
            </div>
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
