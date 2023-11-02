<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('メンティー情報') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                @foreach ($users as $user)
                    <p>ID：{{ $user->mus_user_id }}</p>
                    <p>氏名：{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}</p>
                    <p>大学：{{ $user->userDetail->tud_current_university }}</p>
                    <p>第一志望業界：{{ $user->userDetail->tud_first_industry_preference }}</p>
                    <p>第二志望業界：{{ $user->userDetail->tud_second_industry_preference }}</p>
                    <br><br>
                @endforeach
                <a href="{{ route('admin.index') }}">戻る</a>
            </div>
        </div>
    </div>
</x-app-layout>
