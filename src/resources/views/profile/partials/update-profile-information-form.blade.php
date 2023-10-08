<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <div class="mt-4">
                <x-input-label for="mus_email_address" :value="__('Email')" />
                <x-text-input id="mus_email_address" class="block mt-1 w-full" type="email" name="mus_email_address"
                    :value="$user->mus_email_address" required autocomplete="username" />
                <x-input-error :messages="$errors->get('mus_email_address')" class="mt-2" />
            </div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif

            <!-- ユーザー名 -->
            <div class="mt-4">
                <x-input-label for="mus_user_first_name" :value="__('ユーザー名')" />
                <x-text-input id="mus_user_first_name" class="block mt-1 w-full" type="text"
                    name="mus_user_first_name" :value="$user->mus_user_first_name" />
                <x-input-error :messages="$errors->get('mus_user_first_name')" class="mt-2" />
            </div>

            <!-- ユーザー姓 -->
            <div class="mt-4">
                <x-input-label for="mus_user_last_name" :value="__('ユーザー姓')" />
                <x-text-input id="mus_user_last_name" class="block mt-1 w-full" type="text" name="mus_user_last_name"
                    :value="$user->mus_user_last_name" />
                <x-input-error :messages="$errors->get('mus_user_last_name')" class="mt-2" />
            </div>

            <!-- 所属大学 -->
            <div class="mt-4">
                <x-input-label for="mus_current_university" :value="__('所属大学')" />
                <x-text-input id="mus_current_university" class="block mt-1 w-full" type="text"
                    name="mus_current_university" :value="$user->mus_current_university" />
                <x-input-error :messages="$errors->get('mus_current_university')" class="mt-2" />
            </div>

            <!-- サービスプラン -->
            <div class="mt-4">
                <x-input-label for="mus_service_plan" :value="__('サービスプラン')" />
                <x-text-input id="mus_service_plan" class="block mt-1 w-full" type="text" name="mus_service_plan"
                    :value="$user->mus_service_plan" />
                <x-input-error :messages="$errors->get('mus_service_plan')" class="mt-2" />
            </div>

            <!-- 第一志望業界 -->
            <div class="mt-4">
                <x-input-label for="mus_first_industry_preference" :value="__('第一志望業界')" />
                <x-text-input id="mus_first_industry_preference" class="block mt-1 w-full" type="text"
                    name="mus_first_industry_preference" :value="$user->mus_first_industry_preference" />
                <x-input-error :messages="$errors->get('mus_first_industry_preference')" class="mt-2" />
            </div>

            <!-- 第二志望業界 -->
            <div class="mt-4">
                <x-input-label for="mus_second_industry_preference" :value="__('第二志望業界')" />
                <x-text-input id="mus_second_industry_preference" class="block mt-1 w-full" type="text"
                    name="mus_second_industry_preference" :value="$user->mus_second_industry_preference" />
                <x-input-error :messages="$errors->get('mus_second_industry_preference')" class="mt-2" />
            </div>

        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
