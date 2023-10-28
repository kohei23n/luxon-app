<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ES割り振り') }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('admin.esUpdate', $id) }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')

                <!-- ケース情報 -->
                <div class="mt-4">
                    <p>提出者：{{ $sheet->user->mus_user_last_name }}{{ $sheet->user->mus_user_first_name }}</p>
                    <p>会社：{{ $sheet->company->mco_company_name }}</p>
                    <p>ドキュメントURL：{{ $sheet->tes_es_url }}</p>
                </div>

                <!-- ES割り振り -->
                <div class="mt-4">
                    <x-input-label for="tes_mentor_id" :value="__('ケース割り当て')" />
                    <select id="tes_mentor_id" name="tes_mentor_id">
                        <option value="" disabled selected>選択してください</option>
                        @foreach ($mentors as $mentor)
                            <option value="{{ $mentor->mme_mentor_id }}">{{ $mentor->mme_last_name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('tes_mentor_id')" class="mt-2" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('確定') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>

            <a href="{{ route('admin.esCount') }}">戻る</a>

        </div>
    </div>
</x-app-layout>
