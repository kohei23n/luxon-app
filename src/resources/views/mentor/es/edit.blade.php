<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ES返却') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <p>提出者：{{ $entrySheet->user->mus_user_last_name }}{{ $entrySheet->user->mus_user_first_name }}</p>
            <p>会社名：{{ $entrySheet->company->mco_company_name }}</p>
            <p>URL：{{ $entrySheet->tes_es_url }}</p>

            <form method="post" action="{{ route('mentor.esUpdate', $entrySheet->tes_es_id) }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')

                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('返却') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>

            <a href="{{ route('mentor.esIndex') }}">戻る</a>
        </div>
    </div>
</x-app-layout>
