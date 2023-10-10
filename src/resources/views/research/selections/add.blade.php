<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('選考情報追加') }}
      </h2>
  </x-slot>

  <form id="send-verification" method="post" action="{{ route('verification.send') }}">
      @csrf
  </form>

  <form method="post" action="{{ route('research.selectionsAdd') }}" class="mt-6 space-y-6">
      @csrf
      @method('post')

      <div>
        msd_industry_id
msd_company_id
msd_selection_phase_name
msd_selection_detail
msd_selection_materials_URL
min_delete_flag
min_deletion_datetime
min_registration_datetime
min_update_datetime
min_update_timestamp

          <!-- 選考段階 -->
          <div class="mt-4">
              <x-input-label for="tss_selection_status" :value="__('選考ステータス')" />
              <select id="tss_selection_status" name="tss_selection_status">
                  <option value="ES">ES</option>
                  <option value="選考中">選考中</option>
                  <option value="合格">合格</option>
                  <option value="不合格">不合格</option>
              </select>
              <x-input-error :messages="$errors->get('tss_selection_status')" class="mt-2" />
          </div>

          <!-- 志望順位 -->
          <div class="mt-4">
              <x-input-label for="tss_preference_ranking" :value="__('志望順位')" />
              <x-text-input id="tss_preference_ranking" class="block mt-1 w-full" type="number"
                  name="tss_preference_ranking" />
              <x-input-error :messages="$errors->get('tss_preference_ranking')" class="mt-2" />
          </div>

          <!-- 選考日時 -->
          <div class="mt-4">
              <x-input-label for="tss_selection_date" :value="__('選考日時')" />
              <x-text-input id="tss_selection_date" class="block mt-1 w-full" type="date"
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