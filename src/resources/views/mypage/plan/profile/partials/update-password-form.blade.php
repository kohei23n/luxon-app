<section>
    <header>
        <h2>
            {{ __('パスワード更新') }}
        </h2>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('現在のパスワード')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full"
                autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" />
        </div>

        <div>
            <x-input-label for="password" :value="__('新しいパスワード')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('新しいパスワード：確認')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
        </div>

        <div>
            <button type="submit">Save</button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
