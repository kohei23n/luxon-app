<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('イベント予約') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('reserve.eventIndex', ['year' => $previousMonth->year, 'month' => $previousMonth->month]) }}">前月</a>
            <a href="{{ route('reserve.eventIndex', ['year' => $nextMonth->year, 'month' => $nextMonth->month]) }}">次月</a>

            <table>
                <thead>
                    <!-- ヘッダー部分（曜日表示など） -->
                </thead>
                <tbody>
                    @for ($i = 1; $i <= $daysInMonth; $i++)
                        <tr>
                            <td>
                                {{ $i }}
                                @foreach ($groupedEvents["$year-$month-$i"] ?? [] as $event)
                                    <div>
                                        <a href="{{ route('reserve.eventShow', $event->mev_event_id) }}">{{ $event->mev_event_name }}</a>
                                    </div>
                                @endforeach
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>