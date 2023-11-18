@section('head')
    <link rel="stylesheet" href="{{ asset('css/research/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('選考情報') }}
        </h2>
    </x-slot>

    <div class="reserve-container">
        <div class="reserving-list">
            <div class="reserving-box" onclick="window.location.href = '{{ route('research.industriesIndex') }}';">
                <a href="{{ route('research.industriesIndex') }}">企業情報</a>
            </div>
            <div class="reserving-box" onclick="window.location.href = '{{ route('research.mySelectionsIndex') }}';">
                <a href="{{ route('research.mySelectionsIndex') }}">選考状況</a>
            </div>
        </div>
    </div>

    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
