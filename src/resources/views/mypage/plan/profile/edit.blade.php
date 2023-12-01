@section('head')
    <link rel="stylesheet" href="{{ asset('css/mypage/plan.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('個人情報更新') }}
        </h2>
    </x-slot>
    <div class="container">
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('mypage.plan.profileUpdate') }}" class="form-container">
            @csrf
            @method('patch')

            <h2 class="font-bold">プロフィール更新</h2>

            <!-- メールアドレス -->
            <p>メールアドレス：{{ $user->mus_email_address }}</p>

            <!-- 名前 -->
            <p>名前：{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}</p>

            <!-- 所属大学 -->
            <p>所属大学：{{ $user->userDetail->tud_current_university }}</p>

            <!-- 第一志望業界 -->
            <div>
                <label for="tud_first_industry_preference">第一志望業界</label>
                <input type="text" id="tud_first_industry_preference" name="tud_first_industry_preference"
                    value="{{ $user->userDetail->tud_first_industry_preference }}">
                <x-input-error :messages="$errors->get('tud_first_industry_preference')" />
            </div>

            <!-- 第二志望業界 -->
            <div>
                <label for="tud_second_industry_preference">第二志望業界</label>
                <input type="text" id="tud_second_industry_preference" name="tud_second_industry_preference"
                    value="{{ $user->userDetail->tud_second_industry_preference }}">
                <x-input-error :messages="$errors->get('tud_second_industry_preference')" />
            </div>
            <button type="submit" class="add-button">更新</button>
        </form>
        <div>
            @include('mypage.plan.profile.partials.update-password-form')
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
