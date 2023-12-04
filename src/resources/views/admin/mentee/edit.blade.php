@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('メンティー編集') }}
        </h2>
    </x-slot>

    <div class="admin-container">

        @if (session('status') || session('error'))
            <div class="alert-message">
                {{ session('status') ?: session('error') }}
            </div>
        @endif
        <!-- メンティー編集フォーム -->
        <form method="post" action="{{ route('admin.menteeUpdate', $user->mus_user_id) }}">
            @csrf
            @method('patch')

            <!-- メールアドレス -->
            <div>
                <label for="mus_email_address">メールアドレス</label>
                <input type="email" id="mus_email_address" name="mus_email_address"
                    value="{{ $user->mus_email_address }}">
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
                <input type="text" id="mus_user_last_name" name="mus_user_last_name"
                    value="{{ $user->mus_user_last_name }}">
                <x-input-error :messages="$errors->get('mus_user_last_name')" />
            </div>

            <!-- 名前 -->
            <div>
                <label for="mus_user_first_name">名前</label>
                <input type="text" id="mus_user_first_name" name="mus_user_first_name"
                    value="{{ $user->mus_user_first_name }}">
                <x-input-error :messages="$errors->get('mus_user_first_name')" />
            </div>

            <!-- 所属大学 -->
            <div>
                <label for="tud_current_university">所属大学</label>
                <input type="text" id="tud_current_university" name="tud_current_university"
                    value="{{ optional($user->userDetail)->tud_current_university }}">
                <x-input-error :messages="$errors->get('tud_current_university')" />
            </div>

            <!-- 第一志望業界 -->
            <div>
                <label for="tud_first_industry_preference">第一志望業界</label>
                <input type="text" id="tud_first_industry_preference" name="tud_first_industry_preference"
                    value="{{ optional($user->userDetail)->tud_first_industry_preference }}">
                <x-input-error :messages="$errors->get('tud_first_industry_preference')" />
            </div>

            <!-- 第二志望業界 -->
            <div>
                <label for="tud_second_industry_preference">第二志望業界</label>
                <input type="text" id="tud_second_industry_preference" name="tud_second_industry_preference"
                    value="{{ optional($user->userDetail)->tud_second_industry_preference }}">
                <x-input-error :messages="$errors->get('tud_second_industry_preference')" />
            </div>

            <!-- 専属メンター -->
            <div>
                <label for="mus_dedicated_mentor_id">専属メンター</label>
                <select id="mus_dedicated_mentor_id" name="mus_dedicated_mentor_id">
                    @foreach ($mentors as $mentor)
                        <option value="{{ $mentor->mus_user_id }}"
                            {{ $user->mus_dedicated_mentor_id === $mentor->mus_user_id ? 'selected' : '' }}>
                            {{ $mentor->mus_user_last_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('mus_dedicated_mentor_id')" />
            </div>

            <button type="submit" class="add-button">更新</button>
        </form>
        <!-- メンティー削除 -->
        <form method="post" action="{{ route('admin.menteeDelete', $user->mus_user_id) }}">
            @csrf
            @method('delete')
            <button type="submit" class="delete-button">削除</button>
        </form>
        <a href="{{ route('admin.menteeIndex') }}" class="back-button">戻る</a>
    </div>

</x-app-layout>
