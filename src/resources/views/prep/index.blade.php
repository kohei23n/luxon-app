@section('head')
    <link rel="stylesheet" href="{{ asset('css/prep/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header" class="reserve-header">
        <h2>
            {{ __('選考対策トップ') }}
        </h2>
    </x-slot>
    <div class="reserve-container">
        <ul>
            <li>ケース添削枠：{{ $count->tud_case_study_count_remaining }}</li>
        </ul>
        <div class="reserving-list">
            <div class="reserving-box" onclick="window.location.href = '{{ route('prep.caseAdd') }}';"
                style="cursor: pointer;">
                <a href="{{ route('prep.caseAdd') }}">ケース添削</a>
            </div>

            <div class="reserving-box">
                <a href="">〜準備中〜</a><br>
            </div>
            <div class="reserving-box">
                <a href="">〜準備中〜</a><br>
            </div>
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
