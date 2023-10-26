<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('面談枠情報') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($users as $user)
                        <p>{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}</p>
                        <a href="{{ route('admin.countEdit', $user->mus_user_id) }}">編集</a>
                        <br><br>
                        {{-- <ul>
                            <li>面談枠：{{ $user->userDetail->tud_interview_count_remaining }}</li>
                            <li>イベント枠：{{ $user->userDetail->tud_event_attendance_remaining }}</li>
                            <li>ES添削枠：{{ $user->userDetail->tud_es_count_remaining }}</li>
                            <li>ケース添削枠：{{ $user->userDetail->tud_case_study_count_remaining }}</li>
                        </ul> --}}
                    @endforeach
                    <a href="{{ route('admin.index') }}">戻る</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
