@section('head')
    <link rel="stylesheet" href="{{ asset('css/mentor/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('メンタートップ') }}
        </h2>
    </x-slot>

    <div class="mentor-menu">
        <a href="{{ route('mentor.interviewIndex') }}" class="mentor-link">今月の面談情報</a>
        <a href="{{ route('mentor.caseIndex') }}" class="mentor-link">ケース添削依頼<br>（依頼数：{{ $cases }}）</a>
        <a href="{{ route('mentor.esIndex') }}" class="mentor-link">ES添削依頼<br>（依頼数：{{ $entrySheets }}）</a>
        <a href="{{ route('research.industriesIndex') }}" class="mentor-link" class="mentor-link">選考情報</a>
    </div>
</x-app-layout>
