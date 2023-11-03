<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ES添削') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <div>
                <a href="{{ route('admin.esIndex', ['type' => 'unassigned']) }}">未割り振り：{{ $unassigned }}</a><br>
                <a href="{{ route('admin.esIndex', ['type' => 'assigned']) }}">割り振り済み未返却：{{ $assigned }}</a><br>
                <a href="{{ route('admin.esIndex', ['type' => 'returned']) }}">返却済み：{{ $returned }}</a><br>
                <a href="{{ route('admin.reviewHome') }}">戻る</a>
            </div>
        </div>
    </div>
</x-app-layout>
