@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/event.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('イベント予約') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="calendar-container">
            <p class="counter">イベントチケット：{{ $count->tud_event_attendance_remaining }}</p>
            <p class="counter">面談チケット（イベントにも使えます）：{{ $count->tud_interview_count_remaining }}</p>
            {{-- <a href="{{ route('reserve.ticketEdit') }}" class="ticket-link">チケットを増やす ></a> --}}

            <div class="calendar-navigation">
                <a href="{{ route('reserve.eventIndex', ['year' => $previousMonth->year, 'month' => $previousMonth->month]) }}"
                    class="event-link">
                    前月</a>
                        <span>{{ $month }}月</span>
                        <a href="{{ route('reserve.eventIndex', ['year' => $nextMonth->year, 'month' => $nextMonth->month]) }}"
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
                                                <a href="{{ route('reserve.eventShow', $event->mev_event_id) }}"
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
            <a href="{{ route('reserve.index') }}" class="back-button">戻る</a>
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
