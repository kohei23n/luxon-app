@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('メンター編集') }}
        </h2>
    </x-slot>

    <div class="admin-container">

        @if (session('status') || session('error'))
            <div class="alert-message">
                {{ session('status') ?: session('error') }}
            </div>
        @endif
        <!-- メンター編集フォーム -->
        <form method="post" action="{{ route('admin.mentorUpdate', $mentor->mus_user_id) }}">
            @csrf
            @method('patch')

            <!-- メールアドレス -->
            <div>
                <label for="mus_email_address">メールアドレス</label>
                <input type="email" id="mus_email_address" name="mus_email_address" value="{{ $mentor->mus_email_address }}">
                <x-input-error :messages="$errors->get('mus_email_address')" />
            </div>

            <!-- パスワード -->
            <div>
                <label for="mus_user_password">パスワード</label>
                <input type="text" id="mus_user_password" name="mus_user_password" value="編集不可" disabled>
                <x-input-error :messages="$errors->get('mus_user_password')" />
            </div>

            <!-- 苗字 -->
            <div>
                <label for="mus_user_last_name">苗字</label>
                <input type="text" id="mus_user_last_name" name="mus_user_last_name" value="{{ $mentor->mus_user_last_name }}">
                <x-input-error :messages="$errors->get('mus_user_last_name')" />
            </div>

            <!-- 名前 -->
            <div>
                <label for="mus_user_first_name">名前</label>
                <input type="text" id="mus_user_first_name" name="mus_user_first_name" value="{{ $mentor->mus_user_first_name }}">
                <x-input-error :messages="$errors->get('mus_user_first_name')" />
            </div>

            <!-- LINE URL -->
            <div>
                <label for="mme_line_url">LINE URL</label>
                <input type="text" id="mme_line_url" name="mme_line_url" value="{{ $mentor->mentorProfile->mme_line_url }}">
                <x-input-error :messages="$errors->get('mme_line_url')" />
            </div>

            <!-- TimeRex URL（60分） -->
            <div>
                <label for="mme_timerex_url">TimeRex URL（60分）</label>
                <input type="text" id="mme_timerex_url" name="mme_timerex_url" value="{{ $mentor->mentorProfile->mme_timerex_url }}">
                <x-input-error :messages="$errors->get('mme_timerex_url')" />
            </div>

            <!-- TimeRex URL（20分） -->
            <div>
                <label for="mme_timerex_url_short">TimeRex URL（20分）</label>
                <input type="text" id="mme_timerex_url_short" name="mme_timerex_url_short" value="{{ $mentor->mentorProfile->mme_timerex_url_short }}">
                <x-input-error :messages="$errors->get('mme_timerex_url_short')" />
            </div>

            <!-- 面談給与 -->
            <div>
                <label for="mme_interview_salary">面談給与</label>
                <input type="number" id="mme_interview_salary" name="mme_interview_salary" value="{{ $mentor->mentorProfile->mme_interview_salary }}">
                <x-input-error :messages="$errors->get('mme_interview_salary')" />
            </div>

            <!-- 講義作成給与 -->
            <div>
                <label for="mme_lecture_create_salary">講義作成給与</label>
                <input type="number" id="mme_lecture_create_salary" name="mme_lecture_create_salary" value="{{ $mentor->mentorProfile->mme_lecture_create_salary }}">
                <x-input-error :messages="$errors->get('mme_lecture_create_salary')" />
            </div>

            <!-- 講義給与 -->
            <div>
                <label for="mme_lecture_salary">講義給与</label>
                <input type="number" id="mme_lecture_salary" name="mme_lecture_salary" value="{{ $mentor->mentorProfile->mme_lecture_salary }}">
                <x-input-error :messages="$errors->get('mme_lecture_salary')" />
            </div>

            <button type="submit" class="add-button">更新</button>
        </form>
        <!-- メンティー削除 -->
        <form method="post" action="{{ route('admin.mentorDelete', $mentor->mus_user_id) }}">
            @csrf
            @method('delete')
            <button type="submit" class="delete-button">削除</button>
        </form>
        <a href="{{ route('admin.mentorIndex') }}" class="back-button">戻る</a>
    </div>

</x-app-layout>
