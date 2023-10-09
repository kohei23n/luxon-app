<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('選考情報更新') }}
        </h2>
    </x-slot>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('mypage.selectionUpdate', $status->tss_selection_status_id) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <!-- 企業名 -->
            <div class="mt-4">
                <x-input-label for="tss_company_name" :value="__('企業名')" />
                <x-text-input id="tss_company_name" :value="$status->tss_company_name" class="block mt-1 w-full" type="text" name="tss_company_name" />
                <x-input-error :messages="$errors->get('tss_company_name')" class="mt-2" />
            </div>

            <!-- 選考ステータス -->
            <div class="mt-4">
                <x-input-label for="tss_selection_status" :value="__('選考ステータス')" />
                <select id="tss_selection_status" name="tss_selection_status">
                    <option value="選考前" {{ $status->tss_selection_status == '選考前' ? 'selected' : '' }}>選考前</option>
                    <option value="選考中"  {{ $status->tss_selection_status == '選考中' ? 'selected' : '' }}>選考中</option>
                    <option value="合格"  {{ $status->tss_selection_status == '合格' ? 'selected' : '' }}>合格</option>
                    <option value="不合格"  {{ $status->tss_selection_status == '不合格' ? 'selected' : '' }}>不合格</option>
                </select>
                <x-input-error :messages="$errors->get('tss_selection_status')" class="mt-2" />
            </div>

            <!-- 志望順位 -->
            <div class="mt-4">
                <x-input-label for="tss_preference_ranking" :value="__('志望順位')" />
                <x-text-input id="tss_preference_ranking" :value="$status->tss_preference_ranking" class="block mt-1 w-full" type="number"
                    name="tss_preference_ranking" />
                <x-input-error :messages="$errors->get('tss_preference_ranking')" class="mt-2" />
            </div>

            <!-- 選考日時 -->
            <div class="mt-4">
                <x-input-label for="tss_selection_date" :value="__('選考日時')" />
                <x-text-input id="tss_selection_date" :value="$formattedDate" class="block mt-1 w-full" type="date"
                    name="tss_selection_date" />
                <x-input-error :messages="$errors->get('tss_selection_date')" class="mt-2" />
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
