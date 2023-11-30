@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('メンティー追加') }}
        </h2>
    </x-slot>

    <!-- メンティー追加フォーム -->
    <form method="post" action="{{ route('admin.menteeCreate') }}">
        @csrf
        @method('post')

        <div class="admin-container">
            <!-- メールアドレス -->
            <div>
                <label for="mus_email_address">メールアドレス</label>
                <input type="email" id="mus_email_address" name="mus_email_address">
                <x-input-error :messages="$errors->get('mus_email_address')" />
            </div>

            <!-- パスワード -->
            <div>
                <label for="mus_user_password">パスワード</label>
                <input type="text" id="mus_user_password" name="mus_user_password">
                <x-input-error :messages="$errors->get('mus_user_password')" />
            </div>

            <!-- 苗字 -->
            <div>
                <label for="mus_user_last_name">苗字</label>
                <input type="text" id="mus_user_last_name" name="mus_user_last_name">
                <x-input-error :messages="$errors->get('mus_user_last_name')" />
            </div>

            <!-- 名前 -->
            <div>
                <label for="mus_user_first_name">名前</label>
                <input type="text" id="mus_user_first_name" name="mus_user_first_name">
                <x-input-error :messages="$errors->get('mus_user_first_name')" />
            </div>

            <!-- 所属大学 -->
            <div>
                <label for="tud_current_university">所属大学</label>
                <input type="text" id="tud_current_university" name="tud_current_university">
                <x-input-error :messages="$errors->get('tud_current_university')" />
            </div>

            <!-- 第一志望業界 -->
            <div>
                <label for="tud_first_industry_preference">第一志望業界</label>
                <input type="text" id="tud_first_industry_preference" name="tud_first_industry_preference">
                <x-input-error :messages="$errors->get('tud_first_industry_preference')" />
            </div>

            <!-- 第二志望業界 -->
            <div>
                <label for="tud_second_industry_preference">第二志望業界</label>
                <input type="text" id="tud_second_industry_preference" name="tud_second_industry_preference">
                <x-input-error :messages="$errors->get('tud_second_industry_preference')" />
            </div>

            <!-- イベント参加可能回数 -->
            <div>
                <label for="tud_event_attendance_remaining">イベント参加可能回数</label>
                <input type="number" id="tud_event_attendance_remaining" name="tud_event_attendance_remaining">
                <x-input-error :messages="$errors->get('tud_event_attendance_remaining')" />
            </div>

            <!-- 面談可能回数 -->
            <div>
                <label for="tud_interview_count_remaining">面談可能回数</label>
                <input type="number" id="tud_interview_count_remaining" name="tud_interview_count_remaining">
                <x-input-error :messages="$errors->get('tud_interview_count_remaining')" />
            </div>

            <!-- ケース添削可能回数 -->
            <div>
                <label for="tud_case_study_count_remaining">ケース添削可能回数 </label>
                <input type="number" id="tud_case_study_count_remaining" name="tud_case_study_count_remaining">
                <x-input-error :messages="$errors->get('tud_case_study_count_remaining')" />
            </div>

            <!-- ES提出可能回数 -->
            <div>
                <label for="tud_es_count_remaining">ES提出可能回数</label>
                <input type="number" id="tud_es_count_remaining" name="tud_es_count_remaining">
                <x-input-error :messages="$errors->get('tud_es_count_remaining')" />
            </div>

            <!-- 専属メンター -->
            <div>
                <label for="mus_dedicated_mentor_id">専属メンター</label>
                <select id="mus_dedicated_mentor_id" name="mus_dedicated_mentor_id">
                    <option value="" disabled selected>選択してください</option>
                    @foreach ($mentors as $mentor)
                        <option value="{{ $mentor->mus_user_id }}">{{ $mentor->mus_user_last_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('mus_dedicated_mentor_id')" />
            </div>

            <button type="submit" class="add-button">追加</button>
            <a href="{{ route('admin.index') }}" class="back-button">戻る</a>
        </div>
    </form>

</x-app-layout>
