@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ケース添削') }}
        </h2>
    </x-slot>

    @if (session('status') || session('error'))
        <div class="alert-message">
            {{ session('status') ?: session('error') }}
        </div>
    @endif

    <div class="admin-menu">
        <a href="{{ route('admin.caseIndex', ['type' => 'unassigned']) }}" class="admin-link">未割り振り：{{ $unassigned }}</a>
        <a href="{{ route('admin.caseIndex', ['type' => 'assigned']) }}" class="admin-link">割り振り済み未返却：{{ $assigned }}</a>
        <a href="{{ route('admin.caseIndex', ['type' => 'returned']) }}" class="admin-link">返却済み：{{ $returned }}</a>
        <a href="{{ route('admin.reviewHome') }}" class="back-button">戻る</a>
    </div>
</x-app-layout>
