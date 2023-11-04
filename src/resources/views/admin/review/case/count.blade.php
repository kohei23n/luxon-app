@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/review/case.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ケース添削') }}
        </h2>
    </x-slot>

    <div>
        <a href="{{ route('admin.caseIndex', ['type' => 'unassigned']) }}">未割り振り：{{ $unassigned }}</a><br>
        <a href="{{ route('admin.caseIndex', ['type' => 'assigned']) }}">割り振り済み未返却：{{ $assigned }}</a><br>
        <a href="{{ route('admin.caseIndex', ['type' => 'returned']) }}">返却済み：{{ $returned }}</a><br>
        <a href="{{ route('admin.reviewHome') }}">戻る</a>
    </div>
</x-app-layout>
