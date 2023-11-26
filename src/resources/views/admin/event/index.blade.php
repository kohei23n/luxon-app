@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/event.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('イベント確認') }}
        </h2>
    </x-slot>

    <div class="admin-container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <!-- カレンダービュー -->
        <div class="calendar-navigation">
            <a href="{{ route('admin.eventIndex', ['year' => $previousMonth->year, 'month' => $previousMonth->month]) }}"
                class="event-link">前月</a>
            <span>{{ $month }}月</span>
            <a href="{{ route('admin.eventIndex', ['year' => $nextMonth->year, 'month' => $nextMonth->month]) }}"
                class="event-link">次月</a>
        </div>

        <table class="calendar-table">
            <thead>
                <tr>
                    <th class="calendar-day">日</th>
                    <th class="calendar-day">月</th>
                    <th class="calendar-day">火</th>
                    <th class="calendar-day">水</th>
                    <th class="calendar-day">木</th>
                    <th class="calendar-day">金</th>
                    <th class="calendar-day">土</th>
                </tr>
            </thead>
            <tbody>
                @php $dayCounter = 1; @endphp
                @while ($dayCounter <= $daysInMonth)
                    <tr>
                        @for ($j = 0; $j < 7; $j++)
                            @if ($dayCounter == 1 && $j < $firstDayOfWeek)
                                <td class="calendar-day"></td>
                                @continue
                            @endif
                            <td class="calendar-day">
                                @if ($dayCounter <= $daysInMonth)
                                    {{ $dayCounter }}
                                    <div class="events">
                                        @php
                                            $formattedDay = str_pad($dayCounter, 2, '0', STR_PAD_LEFT);
                                        @endphp
                                        @foreach ($groupedEvents["$year-$month-$formattedDay"] ?? [] as $event)
                                            <a href="{{ route('admin.eventShow', $event->mev_event_id) }}"
                                                class="event-show-link"
                                                style="background-color: {{ $event->backgroundColor }}">{{ $event->mev_event_name }}</a>
                                        @endforeach
                                    </div>
                                    @php $dayCounter++ @endphp
                                @endif
                            </td>
                        @endfor
                    </tr>
                @endwhile
            </tbody>
        </table>
        <a href="{{ route('admin.index') }}" class="back-button">戻る</a>
    </div>
</x-app-layout>
