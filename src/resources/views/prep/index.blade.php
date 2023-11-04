<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('選考対策トップ') }}
        </h2>
    </x-slot>
    <div>
        <a href="{{ route('reserve.caseAdd') }}">ケース添削</a><br>
        <a href="">ケースノック</a><br>
        <a href="">エントリーリマインダー</a><br>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
