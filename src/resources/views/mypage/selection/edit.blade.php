<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('選考情報更新') }}
        </h2>
    </x-slot>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('mypage.selectionUpdate', $status->tss_selection_status_id) }}">
        @csrf
        @method('patch')

        <div>
            <!-- 企業名 -->
            <div>
                <x-input-label for="tss_company_name" :value="__('企業名')" />
                <x-text-input id="tss_company_name" :value="$status->tss_company_name" class="block mt-1 w-full" type="text"
                    name="tss_company_name" />
                <x-input-error :messages="$errors->get('tss_company_name')" class="mt-2" />
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
                <x-input-error :messages="$errors->get('tss_selection_status')" class="mt-2" />
            </div>

            <!-- 志望順位 -->
            <div>
                <x-input-label for="tss_preference_ranking" :value="__('志望順位')" />
                <x-text-input id="tss_preference_ranking" :value="$status->tss_preference_ranking" class="block mt-1 w-full" type="number"
                    name="tss_preference_ranking" />
                <x-input-error :messages="$errors->get('tss_preference_ranking')" class="mt-2" />
            </div>

            <!-- 選考日時 -->
            <div>
                <x-input-label for="tss_selection_date" :value="__('選考日時')" />
                <x-text-input id="tss_selection_date" :value="$formattedDate" class="block mt-1 w-full" type="date"
                    name="tss_selection_date" />
                <x-input-error :messages="$errors->get('tss_selection_date')" class="mt-2" />
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
