@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('管理者トップ') }}
        </h2>
    </x-slot>
    <div class="admin-menu">
        <a href="{{ route('admin.menteeIndex') }}" class="admin-link">メンティー情報</a>
        <a href="{{ route('admin.mentorIndex') }}" class="admin-link">メンター情報</a>
        <a href="{{ route('admin.countIndex') }}" class="admin-link">チケット割り振り</a>
        <a href="{{ route('admin.reviewHome') }}" class="admin-link">添削割り振り</a>
        <a href="{{ route('admin.eventAdd') }}" class="admin-link">イベント登録</a>
        <a href="{{ route('admin.eventIndex') }}" class="admin-link">イベント確認</a>
    </div>
</x-app-layout>
