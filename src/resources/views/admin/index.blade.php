<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('管理者トップ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('admin.eventAdd') }}">イベント追加</a>
                <a href="{{ route('admin.countIndex') }}">面談枠追加</a>
            </div>
        </div>
    </div>
</x-app-layout>
