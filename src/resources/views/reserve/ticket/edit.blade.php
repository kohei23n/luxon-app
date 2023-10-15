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
                <li>イベント参加枠：{{ $plan->tsp_event_attendance }}</li>
                <li>面談枠：{{ $plan->tsp_interview_count }}</li>
                <li>ES添削枠：{{ $plan->tsp_es_count }}</li>
                <li>ケース添削枠：{{ $plan->tsp_case_study_count }}</li>
            </ul>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('reserve.ticketUpdate') }}" class="mt-6 space-y-6">
                @csrf
                @method('post')

                <!-- イベント参加枠 -->
                <div class="mt-4">
                    <x-input-label for="tsp_event_attendance" :value="__('イベント枠追加')" />
                    <x-text-input id="tsp_event_attendance" class="block mt-1 w-full" type="number"
                        name="tsp_event_attendance" />
                    <x-input-error :messages="$errors->get('tsp_event_attendance')" class="mt-2" />
                </div>

                <!-- 面談枠 -->
                <div class="mt-4">
                    <x-input-label for="tsp_interview_count" :value="__('面談枠追加')" />
                    <x-text-input id="tsp_interview_count" class="block mt-1 w-full" type="number"
                        name="tsp_interview_count" />
                    <x-input-error :messages="$errors->get('tsp_interview_count')" class="mt-2" />
                </div>

                <!-- ES添削枠 -->
                <div class="mt-4">
                    <x-input-label for="tsp_es_count" :value="__('ES添削枠追加')" />
                    <x-text-input id="tsp_es_count" class="block mt-1 w-full" type="number" name="tsp_es_count" />
                    <x-input-error :messages="$errors->get('tsp_es_count')" class="mt-2" />
                </div>

                <!-- ケース添削枠 -->
                <div class="mt-4">
                    <x-input-label for="tsp_case_study_count" :value="__('ケース添削枠追加')" />
                    <x-text-input id="tsp_case_study_count" class="block mt-1 w-full" type="number"
                        name="tsp_case_study_count" />
                    <x-input-error :messages="$errors->get('tsp_case_study_count')" class="mt-2" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('申請') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>

            <a href="{{ route('reserve.index') }}">戻る</a>

        </div>
    </div>
</x-app-layout>
