<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('管理者トップ') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <a href="{{ route('admin.menteeIndex') }}">メンティー情報</a><br>
            <a href="{{ route('admin.mentorIndex') }}">メンター情報</a><br>
            <a href="{{ route('admin.countIndex') }}">チケット割り振り</a><br>
            <a href="{{ route('admin.reviewHome') }}">添削割り振り</a><br>
            <a href="{{ route('admin.eventAdd') }}">イベント登録</a><br>
            <a href="{{ route('admin.eventIndex') }}">イベント確認</a>
        </div>
    </div>
</x-app-layout>
