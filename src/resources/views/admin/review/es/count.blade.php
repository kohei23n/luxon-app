<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ES添削') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <a href="{{ route('admin.esIndex', ['type' => 'unassigned']) }}">未割り振り：{{ $unassigned }}</a><br>
                <a href="{{ route('admin.esIndex', ['type' => 'assigned']) }}">割り振り済み未返却：{{ $assigned }}</a><br>
                <a href="{{ route('admin.esIndex', ['type' => 'returned']) }}">返却済み：{{ $returned }}</a><br>
                <a href="{{ route('admin.reviewHome') }}">戻る</a>
            </div>
        </div>
    </div>
</x-app-layout>
