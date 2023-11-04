@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/mentor.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('メンター情報') }}
        </h2>
    </x-slot>

    <div>
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
</x-app-layout>
