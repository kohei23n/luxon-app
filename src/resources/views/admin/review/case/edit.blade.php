<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ケース割り振り') }}
        </h2>
    </x-slot>
    <div>
        <div>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('admin.caseUpdate', $id) }}">
                @csrf
                @method('patch')

                <!-- ケース情報 -->
                <div>
                    <p>提出者：{{ $case->user->mus_user_last_name }}{{ $case->user->mus_user_first_name }}</p>
                    <p>ケース設問：{{ $case->tca_case_content }}</p>
                    <p>ドキュメントURL：{{ $case->tca_case_url }}</p>
                </div>

                <!-- ケース割り振り -->
                <div>
                    <x-input-label for="tca_mentor_id" :value="__('ケース割り当て')" />
                    <select id="tca_mentor_id" name="tca_mentor_id">
                        <option value="" disabled selected>選択してください</option>
                        @foreach ($mentors as $mentor)
                            <option value="{{ $mentor->mus_user_id }}">{{ $mentor->mus_user_last_name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('tca_mentor_id')" />
                </div>

                <div>
                    <x-primary-button>{{ __('確定') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                            {{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>

            <a href="{{ route('admin.caseCount') }}">戻る</a>

        </div>
    </div>
</x-app-layout>
