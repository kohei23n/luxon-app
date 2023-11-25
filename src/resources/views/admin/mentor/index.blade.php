@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('メンター情報') }}
        </h2>
    </x-slot>

    @if (session('status') || session('error'))
        <div class="alert {{ session('status') ? 'alert-success' : 'alert-danger' }}">
            {{ session('status') ?: session('error') }}
        </div>
    @endif

    <a href="{{ route('admin.mentorAdd') }}" class="add-button">メンターを追加する</a>
    <a href="{{ route('admin.index') }}" class="back-button">戻る</a>

    @foreach ($mentors as $mentor)
        <div class="admin-container">
            <p>ID：{{ $mentor->mus_user_id }}</p>
            <p>氏名：{{ $mentor->mus_user_last_name }}{{ $mentor->mus_user_first_name }}</p>
            <p>メールアドレス：{{ $mentor->mus_email_address }}</p>
            <p>LINE URL：{{ $mentor->mentorProfile->mme_line_url }}</p>
            <p>TimeRex URL（60分）：{{ $mentor->mentorProfile->mme_timerex_url }}</p>
            <p>TimeRex URL（20分）：{{ $mentor->mentorProfile->mme_timerex_url_short }}</p>
            <p>面談給与：{{ $mentor->mentorProfile->mme_interview_salary }}</p>
            <p>講義作成給与：{{ $mentor->mentorProfile->mme_lecture_create_salary }}</p>
            <p>講義給与：{{ $mentor->mentorProfile->mme_lecture_salary }}</p>
        </div>
    @endforeach
</x-app-layout>
