@section('head')
    <link rel="stylesheet" href="{{ asset('css/mypage/plan.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('個人情報更新') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <section>
                <header>
                    <h2>
                        {{ __('個人情報') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('更新がある場合は下記からお願いいたします。') }}
                    </p>
                </header>

                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>

                <form method="post" action="{{ route('mypage.plan.profileUpdate') }}">
                    @csrf
                    @method('patch')

                    <div>
                        <!-- メールアドレス -->
                        <div>
                            <p>メールアドレス：{{ $user->mus_email_address }}</p>
                        </div>

                        <!-- 名前 -->
                        <div>
                            <p>名前：{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}</p>
                        </div>

                        <!-- 所属大学 -->
                        <div>
                            <p>所属大学：{{ $user->userDetail->tud_current_university }}</p>
                        </div>

                        <!-- 第一志望業界 -->
                        <div>
                            <label for="tud_first_industry_preference">第一志望業界</label>
                            <input type="text" id="tud_first_industry_preference" name="tud_first_industry_preference" value="{{ $user->userDetail->tud_first_industry_preference }}">
                            <x-input-error :messages="$errors->get('tud_first_industry_preference')" />
                        </div>

                        <!-- 第二志望業界 -->
                        <div>
                            <label for="tud_second_industry_preference">第二志望業界</label>
                            <input type="text" id="tud_second_industry_preference" name="tud_second_industry_preference" value="{{ $user->userDetail->tud_second_industry_preference }}">
                            <x-input-error :messages="$errors->get('tud_second_industry_preference')" />
                        </div>
                    </div>

                    <div>
                        <button type="submit">更新</button>

                        @if (session('status') === 'profile-updated')
                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                                {{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </section>
        </div>

        <div>
            @include('mypage.plan.profile.partials.update-password-form')
        </div>
        
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
