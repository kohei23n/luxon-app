<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="mus_email_address" :value="__('Email')" />
            <x-text-input id="mus_email_address" class="block mt-1 w-full" type="email" name="mus_email_address" :value="old('mus_email_address')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('mus_email_address')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="mus_user_password" :value="__('Password')" />

            <x-text-input id="mus_user_password" class="block mt-1 w-full"
                            type="password"
                            name="mus_user_password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('mus_user_password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="mus_user_password_confirmation" :value="__('Confirm Password')" />
        
            <x-text-input id="mus_user_password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="mus_user_password_confirmation" required autocomplete="new-password" />
        
            <x-input-error :messages="$errors->get('mus_user_password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
