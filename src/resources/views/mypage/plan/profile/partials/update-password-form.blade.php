<section>
    <form method="post" action="{{ route('password.update') }}" class="form-container">
        @csrf
        @method('put')

        <h2 class="font-bold">パスワード更新</h2>

        <div>
            <x-input-label for="current_password" :value="__('現在のパスワード')" />
            <x-text-input id="current_password" name="current_password" type="password" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" />
        </div>

        <div>
            <x-input-label for="password" :value="__('新しいパスワード')" />
            <x-text-input id="password" name="password" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('パスワード確認')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
        </div>

        <button type="submit" class="add-button">更新</button>
    </form>
</section>
