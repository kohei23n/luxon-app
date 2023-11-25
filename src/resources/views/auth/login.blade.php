@section('head')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
<x-guest-layout>
    <a href="{{ route('index') }}">
        <h1>Tachyon</h1>
    </a>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h2>Sign In</h2>
        <!-- Email Address -->
        <div class="login-input-box">
            <x-input-label for="mus_email_address" style="color:white; border-width: 0; margin-right: 38px;"
                :value="__('Email')" />
            <x-text-input style="background-color: white; color: black;" id="mus_email_address" type="email"
                name="mus_email_address" :value="old('mus_email_address')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('mus_email_address')" />
        </div>

        <!-- Password -->
        <div class="login-input-box" style="display: flex; flex-direction: column;">
            <x-input-label for="mus_user_password" style="color:white; border-width: 0; margin-right: 10px;"
                :value="__('Password')" />
            <x-text-input style=" background-color: white; color: black;" id="mus_user_password" type="password"
                name="mus_user_password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('mus_user_password')" />
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
            <div class="btn-box">
                <button type="submit" style="backgroud-color: #4597F7;">ログイン</button>
            </div>
        </div>
    </form>
</x-guest-layout>
