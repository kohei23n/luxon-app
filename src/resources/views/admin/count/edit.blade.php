<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('チケット申請') }}
      </h2>
  </x-slot>
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

          <p>現在のチケット数</p>
          <ul>
              <li>面談枠：{{ $count->tud_interview_count_remaining }}</li>
              <li>イベント枠：{{ $count->tud_event_attendance_remaining }}</li>
              <li>ES添削枠：{{ $count->tud_es_count_remaining }}</li>
              <li>ケース添削枠：{{ $count->tud_case_study_count_remaining }}</li>
          </ul>

          <form id="send-verification" method="post" action="{{ route('verification.send') }}">
              @csrf
          </form>

          <form method="post" action="{{ route('admin.countUpdate', $id) }}" class="mt-6 space-y-6">
              @csrf
              @method('patch')

              <!-- イベント参加枠 -->
              <div class="mt-4">
                  <x-input-label for="tud_event_attendance_remaining" :value="__('イベント枠追加')" />
                  <x-text-input id="tud_event_attendance_remaining" class="block mt-1 w-full" type="number"
                      name="tud_event_attendance_remaining" />
                  <x-input-error :messages="$errors->get('tud_event_attendance_remaining')" class="mt-2" />
              </div>

              <!-- 面談枠 -->
              <div class="mt-4">
                  <x-input-label for="tud_interview_count_remaining" :value="__('面談枠追加')" />
                  <x-text-input id="tud_interview_count_remaining" class="block mt-1 w-full" type="number"
                      name="tud_interview_count_remaining" />
                  <x-input-error :messages="$errors->get('tud_interview_count_remaining')" class="mt-2" />
              </div>

              <!-- ES添削枠 -->
              <div class="mt-4">
                  <x-input-label for="tud_es_count_remaining" :value="__('ES添削枠追加')" />
                  <x-text-input id="tud_es_count_remaining" class="block mt-1 w-full" type="number" name="tud_es_count_remaining" />
                  <x-input-error :messages="$errors->get('tud_es_count_remaining')" class="mt-2" />
              </div>

              <!-- ケース添削枠 -->
              <div class="mt-4">
                  <x-input-label for="tud_case_study_count_remaining" :value="__('ケース添削枠追加')" />
                  <x-text-input id="tud_case_study_count_remaining" class="block mt-1 w-full" type="number"
                      name="tud_case_study_count_remaining" />
                  <x-input-error :messages="$errors->get('tud_case_study_count_remaining')" class="mt-2" />
              </div>

              <div class="flex items-center gap-4">
                  <x-primary-button>{{ __('追加') }}</x-primary-button>

                  @if (session('status') === 'profile-updated')
                      <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                          class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                  @endif
              </div>
          </form>

          <a href="{{ route('admin.countIndex') }}">戻る</a>

      </div>
  </div>
</x-app-layout>