<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('面談枠情報') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                @foreach ($cases as $case)
                    <p>{{ $case->tca_case_url }}</p>
                    <br><br>
                @endforeach
                <a href="{{ route('admin.index') }}">戻る</a>
            </div>
        </div>
    </div>
</x-app-layout>
