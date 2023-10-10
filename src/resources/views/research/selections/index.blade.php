<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('選考詳細') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>選考詳細一覧</h1>
                    @foreach ($selections as $phaseName => $details)
                        <h2>選考段階：{{ $phaseName }}</h2>

                        @foreach ($details as $detail)
                            <div>
                                <p>{{ $detail->msd_selection_detail }}</p>
                            </div>
                        @endforeach
                    @endforeach

                    <a href="{{ route('research.selectionsAdd', $id) }}">新しい情報を追加する</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
