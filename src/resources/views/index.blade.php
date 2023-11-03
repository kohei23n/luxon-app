@section('head')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

<x-app-layout>
    <div class="section-box">
        <h2 class="section-header">コラム・企業情報等</h2>
    </div>
    <div class="section-box">
        <h2 class="section-header">イベントリマインダー</h2>
        @foreach ($upcomingEvents as $event)
            <div class="event-box">
                <h3>{{ $event->mev_event_name }}</h3>
                <p class="card-text">{{ $event->mev_event_datetime }}</p>
            </div>
        @endforeach
    </div>
    <div class="entry-reminder section-box">
        <h2 class="section-header">エントリーリマインダー</h2>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
