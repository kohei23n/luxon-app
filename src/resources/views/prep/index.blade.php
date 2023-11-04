@section('head')
    <link rel="stylesheet" href="{{ asset('css/prep/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('選考対策トップ') }}
        </h2>
    </x-slot>
    <div>
        <a href="{{ route('prep.caseAdd') }}">ケース添削</a><br>
        <a href="">ケースノック</a><br>
        <a href="">エントリーリマインダー</a><br>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
