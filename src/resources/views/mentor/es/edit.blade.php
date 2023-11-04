<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ES返却') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <p>提出者：{{ $entrySheet->user->mus_user_last_name }}{{ $entrySheet->user->mus_user_first_name }}</p>
            <p>会社名：{{ $entrySheet->tes_company_name }}</p>
            <p>URL：{{ $entrySheet->tes_es_url }}</p>

            <form method="post" action="{{ route('mentor.esUpdate', $entrySheet->tes_es_id) }}">
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

            <a href="{{ route('mentor.esIndex') }}">戻る</a>
        </div>
    </div>
</x-app-layout>
