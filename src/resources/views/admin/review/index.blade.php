<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('添削トップ') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <a href="{{ route('admin.esCount') }}">ES添削</a><br>
            <a href="{{ route('admin.caseCount') }}">ケース添削</a><br>

            <a href="{{ route('admin.index') }}">戻る</a>
        </div>
    </div>
</x-app-layout>
