<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="mus_email_address" :value="__('Email')" />
            <x-text-input id="mus_email_address" type="email" name="mus_email_address" :value="old('mus_email_address')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('mus_email_address')" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="mus_user_password" :value="__('Password')" />

            <x-text-input id="mus_user_password" type="password" name="mus_user_password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('mus_user_password')" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="mus_user_password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="mus_user_password_confirmation" type="password" name="mus_user_password_confirmation"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('mus_user_password_confirmation')" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
