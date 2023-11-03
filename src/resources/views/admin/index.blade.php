<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('管理者トップ') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <a href="{{ route('admin.menteeIndex') }}">メンティー情報</a><br>
            <a href="{{ route('admin.mentorIndex') }}">メンター情報</a><br>
            <a href="{{ route('admin.countIndex') }}">チケット割り振り</a><br>
            <a href="{{ route('admin.reviewHome') }}">添削割り振り</a><br>
            <a href="{{ route('admin.eventAdd') }}">イベント登録</a><br>
            <a href="{{ route('admin.eventIndex') }}">イベント確認</a>
        </div>
    </div>
</x-app-layout>
