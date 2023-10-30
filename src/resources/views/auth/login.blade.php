@section('head')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
<x-guest-layout style="width: 100%; height: 100%;">
    <h1 class="mt-32">Tachyon</h1>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h2>Mentee Sign In</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="mus_email_address" style="color:white;" :value="__('Email')" />
            <x-text-input style="margin-top: 10px; background-color: white; color: black;" id="mus_email_address"
                class="block mt-1 w-full" type="email" name="mus_email_address" :value="old('mus_email_address')" required autofocus
                autocomplete="username" />
            <x-input-error :messages="$errors->get('mus_email_address')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="mus_user_password" style="color:white;" :value="__('Password')" />
            <x-text-input style="margin-top: 10px; background-color: white; color: black;" id="mus_user_password"
                class="block mt-1 w-full" type="password" name="mus_user_password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('mus_user_password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600" style="color:white;">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}"style="color:white;">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button style="color: white;" class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
