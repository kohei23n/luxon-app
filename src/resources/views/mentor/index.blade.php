@section('head')
    <link rel="stylesheet" href="{{ asset('css/mentor/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('メンタートップ') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <a href="{{ route('mentor.caseIndex') }}">ケース添削依頼</a>
            <p>依頼数：{{ $cases }}</p>
            <br>
            <a href="{{ route('mentor.esIndex') }}">ES添削依頼</a>
            <p>依頼数：{{ $entrySheets }}</p>
            <br>
            <a href="{{ route('research.index') }}">選考情報</a><br>
        </div>
    </div>
</x-app-layout>
