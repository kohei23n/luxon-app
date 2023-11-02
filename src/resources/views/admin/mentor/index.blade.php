<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('メンター情報') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                @foreach ($mentors as $mentor)
                    <p>ID：{{ $mentor->mus_user_id }}</p>
                    <p>氏名：{{ $mentor->mus_user_last_name }}{{ $mentor->mus_user_first_name }}</p>
                    <p>メールアドレス：{{ $mentor->mus_email_address }}</p>
                    <p>LINE URL：{{ $mentor->mentorProfile->mme_line_url }}</p>
                    <p>TimeRex URL：{{ $mentor->mentorProfile->mme_timerex_url }}</p>
                    <p>面談給与：{{ $mentor->mentorProfile->mme_interview_salary }}</p>
                    <p>講義作成給与：{{ $mentor->mentorProfile->mme_lecture_create_salary }}</p>
                    <p>講義給与：{{ $mentor->mentorProfile->mme_lecture_salary }}</p>
                    <br><br>
                @endforeach
                <a href="{{ route('admin.index') }}">戻る</a>
            </div>
        </div>
    </div>
</x-app-layout>
