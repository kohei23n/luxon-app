<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('選考情報追加') }}
        </h2>
    </x-slot>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('research.selectionsCreate', $id) }}">
        @csrf
        @method('post')

        <div>
            <!-- 選考段階 -->
            <div>
                <x-input-label for="msd_selection_phase_id" :value="__('選考段階')" />
                <select id="msd_selection_phase_id" name="msd_selection_phase_id">
                    <option value="" disabled selected>選択してください</option>
                    @foreach ($selectionPhases as $phase)
                        <option value="{{ $phase->msp_phase_id }}">{{ $phase->msp_phase_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('msd_selection_phase_id')" />
            </div>

            <!-- 選考詳細 -->
            <div>
                <x-input-label for="msd_selection_detail" :value="__('選考詳細')" />
                <textarea name="msd_selection_detail" id="msd_selection_detail" cols="30" rows="10"></textarea>
                <x-input-error :messages="$errors->get('msd_selection_detail')" />
            </div>
        </div>

        <div>
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>

    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
