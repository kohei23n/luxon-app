<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ケース返却') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <p>提出者：{{ $case->user->mus_user_last_name }}{{ $case->user->mus_user_first_name }}</p>
            <p>設問：{{ $case->tca_case_content }}</p>
            <p>URL：{{ $case->tca_case_url }}</p>

            <form method="post" action="{{ route('mentor.caseUpdate', $case->tca_case_id) }}">
                @csrf
                @method('patch')

                <div>
                    <x-primary-button>{{ __('返却') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">{{ __('Saved.') }}
                        </p>
                    @endif
                </div>
            </form>

            <a href="{{ route('mentor.caseIndex') }}">戻る</a>
        </div>
    </div>
</x-app-layout>
