<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('選考情報追加') }}
        </h2>
    </x-slot>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('research.selectionsCreate', $id) }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <div>
            <!-- 選考段階 -->
            <div class="mt-4">
                <x-input-label for="msd_selection_phase_id" :value="__('選考段階')" />
                <select id="msd_selection_phase_id" name="msd_selection_phase_id">
                    <option value="" disabled selected>選択してください</option>
                    @foreach ($selectionPhases as $phase)
                        <option value="{{ $phase->msp_phase_id }}">{{ $phase->msp_phase_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('msd_selection_phase_id')" class="mt-2" />
            </div>

            <!-- 選考詳細 -->
            <div class="mt-4">
                <x-input-label for="msd_selection_detail" :value="__('選考詳細')" />
                <x-text-input id="msd_selection_detail" class="block mt-1 w-full" type="text"
                    name="msd_selection_detail" />
                <x-input-error :messages="$errors->get('msd_selection_detail')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</x-app-layout>
