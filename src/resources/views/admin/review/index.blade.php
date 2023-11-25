@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('添削トップ') }}
        </h2>
    </x-slot>

    <div class="admin-menu">
        <a href="{{ route('admin.esCount') }}" class="admin-link">ES添削</a>
        <a href="{{ route('admin.caseCount') }}" class="admin-link">ケース添削</a>
        <a href="{{ route('admin.index') }}" class="back-button">戻る</a>
    </div>
</x-app-layout>
