<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('メンタートップ') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <a href="{{ route('mentor.caseIndex') }}">ケース添削依頼</a>
            <p>依頼数：{{ $cases }}</p>
            <br>
            <a href="{{ route('mentor.esIndex') }}">ES添削依頼</a>
            <p>依頼数：{{ $entrySheets }}</p>
            <br>
            <a href="{{ route('research.index') }}">選考情報</a><br>
        </div>
    </div>
</x-app-layout>
