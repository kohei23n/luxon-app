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
    <div class="list-box">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="btn-list">
                <a class="btn" href="">
                    <img src="{{ asset('images/selection-preparetion.png') }}" alt="Image Description"
                        style="width:78px; height:78px;">選考対策</a>
                <a class="btn" href="{{ route('research.index') }}">
                    <img src="{{ asset('images/research-industry.png') }}" alt="Image Description"
                        style="width:78px; height:78px;">選考情報</a>
                <a class="btn" href="{{ route('reserve.index') }}">
                    <img src="{{ asset('images/reserving.png') }}" alt="Image Description"
                        style="width:78px; height:78px;">予約</a>
                <a class="btn" href="{{ route('mypage.index') }}">
                    <img src="{{ asset('images/my-page.png') }}" alt="Image Description"
                        style="width:78px; height:78px;">マイページ</a>
            </div>
        </div>
    </div>
</x-app-layout>
