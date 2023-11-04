<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('選考情報追加') }}
        </h2>
    </x-slot>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('mypage.selectionCreate') }}">
        @csrf
        @method('post')

        <!-- 企業名 -->
        <div>
            <x-input-label for="tss_company_name" :value="__('企業名')" />
            <x-text-input id="tss_company_name" type="text" name="tss_company_name" />
            <x-input-error :messages="$errors->get('tss_company_name')" />
        </div>

        <!-- 選考ステータス -->
        <div>
            <x-input-label for="tss_selection_status" :value="__('選考ステータス')" />
            <select id="tss_selection_status" name="tss_selection_status">
                <option value="" disabled selected>選択してください</option>
                @foreach ($selectionPhases as $phase)
                    <option value="{{ $phase->msp_phase_id }}">{{ $phase->msp_phase_name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('tss_selection_status')" />
        </div>

        <!-- 志望順位 -->
        <div>
            <x-input-label for="tss_preference_ranking" :value="__('志望順位')" />
            <x-text-input id="tss_preference_ranking" type="number" name="tss_preference_ranking" />
            <x-input-error :messages="$errors->get('tss_preference_ranking')" />
        </div>

        <!-- 選考日時 -->
        <div>
            <x-input-label for="tss_selection_date" :value="__('選考日時')" />
            <x-text-input id="tss_selection_date" type="date" name="tss_selection_date" />
            <x-input-error :messages="$errors->get('tss_selection_date')" />
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
