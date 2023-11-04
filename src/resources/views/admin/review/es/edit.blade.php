<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ES割り振り') }}
        </h2>
    </x-slot>
    <div>
        <div>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('admin.esUpdate', $id) }}">
                @csrf
                @method('patch')

                <!-- ES情報 -->
                <div>
                    <p>提出者：{{ $sheet->user->mus_user_last_name }}{{ $sheet->user->mus_user_first_name }}</p>
                    <p>会社：{{ $sheet->tes_company_name }}</p>
                    <p>ドキュメントURL：{{ $sheet->tes_es_url }}</p>
                </div>

                <!-- ES割り振り -->
                <div>
                    <label for="tes_mentor_id">ES割り当て</label>
                    <select id="tes_mentor_id" name="tes_mentor_id">
                        <option value="" disabled selected>選択してください</option>
                        @foreach ($mentors as $mentor)
                            <option value="{{ $mentor->mus_user_id }}">{{ $mentor->mus_user_last_name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('tes_mentor_id')" />
                </div>

                <div>
                    <button type="submit">確定</button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                            {{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>

            <a href="{{ route('admin.esCount') }}">戻る</a>

        </div>
    </div>
</x-app-layout>
