<x-app-layout>
    <x-slot name="header" class="reserve-header">
        <h2>
            {{ __('ホーム') }}
        </h2>
    </x-slot>

    <div class="container">
        <p class="welcome-message">ようこそ、{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}さん</p>

        <div class="section-box">
            <h2 class="section-header">コラム・企業情報等</h2>
        </div>
        <div class="section-box">
            <h2 class="section-header">イベントリマインダー</h2>
            @foreach ($upcomingEvents as $event)
                <div class="event-box">
                    <h3>{{ $event->mev_event_name }}</h3>
                    <p class="card-text">{{ $event->mev_event_datetime }}</p>
                    <a href="{{ $event->mev_event_participate_url }}"
                        class="card-text">{{ $event->mev_event_participate_url }}</a>
                </div>
            @endforeach
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
