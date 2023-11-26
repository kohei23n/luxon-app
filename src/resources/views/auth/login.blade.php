@section('head')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
<x-guest-layout>
    <h1 class="title">Tachyon</h1>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h2>Sign In</h2>
        <!-- Email Address -->
        <div class="login-input-box">
            <label for="mus_email_address">Email</label>
            <input type="email" id="mus_email_address" name="mus_email_address" value="{{ old('mus_email_address') }}">
            <x-input-error :messages="$errors->get('mus_email_address')" />
        </div>

        <!-- Password -->
        <div class="login-input-box" style="display: flex; flex-direction: column;">
            <label for="mus_user_password">Password</label>
            <input type="password" id="mus_user_password" name="mus_user_password" required
                autocomplete="current-password">
            <x-input-error :messages="$errors->get('mus_user_password')" />
        </div>

        @if ($errors->has('email'))
            <div class="mt-2">
                <strong>{{ $errors->first('email') }}</strong>
            </div>
        @endif

        <div class="btn-box">
            <button type="submit">ログイン</button>
        </div>
    </form>
</x-guest-layout>
