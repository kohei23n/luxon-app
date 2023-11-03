@section('head')
    <link rel="stylesheet" href="{{ asset('css/event.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('イベント確認') }}
        </h2>
    </x-slot>

    <div>
        <div>
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
                                            @foreach ($groupedEvents["$year-$month-$dayCounter"] ?? [] as $event)
                                                <a href="{{ route('admin.eventShow', $event->mev_event_id) }}"
                                                    class="event-show-link">{{ $event->mev_event_name }}</a>
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
            <a href="{{ route('admin.index') }}" class="event-link">戻る</a>
        </div>
    </div>
</x-app-layout>
