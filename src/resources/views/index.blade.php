<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Top') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="">選考対策</a>
                    <a href="">業界研究</a>
                    <a href="{{ route('reserve.index') }}">予約</a>
                    <a href="{{ route('profile.edit') }}">マイページ</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
