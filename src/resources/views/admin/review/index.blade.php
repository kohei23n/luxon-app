<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('添削トップ') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <a href="{{ route('admin.esCount') }}">ES添削</a><br>
            <a href="{{ route('admin.caseCount') }}">ケース添削</a><br>

            <a href="{{ route('admin.index') }}">戻る</a>
        </div>
    </div>
</x-app-layout>
