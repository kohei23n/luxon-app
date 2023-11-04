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
                            <x-input-label :value="__('メールアドレス')" />
                            <p>{{ $user->mus_email_address }}</p>
                        </div>

                        <!-- 名前 -->
                        <div>
                            <x-input-label :value="__('名前')" />
                            <p>{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}</p>
                        </div>

                        <!-- 所属大学 -->
                        <div>
                            <x-input-label :value="__('所属大学')" />
                            <p>{{ $user->userDetail->tud_current_university }}</p>
                        </div>

                        <!-- 第一志望業界 -->
                        <div>
                            <x-input-label for="tud_first_industry_preference" :value="__('第一志望業界')" />
                            <x-text-input id="tud_first_industry_preference" type="text"
                                name="tud_first_industry_preference" :value="$user->userDetail->tud_first_industry_preference" />
                            <x-input-error :messages="$errors->get('tud_first_industry_preference')" />
                        </div>

                        <!-- 第二志望業界 -->
                        <div>
                            <x-input-label for="tud_second_industry_preference" :value="__('第二志望業界')" />
                            <x-text-input id="tud_second_industry_preference" type="text"
                                name="tud_second_industry_preference" :value="$user->userDetail->tud_second_industry_preference" />
                            <x-input-error :messages="$errors->get('tud_second_industry_preference')" />
                        </div>
                    </div>

                    <div>
                        <x-primary-button>{{ __('更新') }}</x-primary-button>

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

        <div>
            @include('mypage.plan.profile.partials.delete-user-form')
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
