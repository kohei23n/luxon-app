<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('reserve.caseCreate') }}" class="mt-6 space-y-6">
                @csrf
                @method('post')

                <p>ES添削・ケース添削チケット：{{ $plan->tsp_case_study_count }}</p>

                {{-- チケットが0より大きい場合は表示 --}}
                @if ($plan->tsp_case_study_count > 0)
                    <!-- 設問内容 -->
                    <div class="mt-4">
                        <x-input-label for="mca_case_content" :value="__('設問内容')" />
                        <x-text-input id="mca_case_content" class="block mt-1 w-full" type="text"
                            name="mca_case_content" />
                        <x-input-error :messages="$errors->get('mca_case_content')" class="mt-2" />
                    </div>

                    <!-- 思考時間 -->
                    <div class="mt-4">
                        <x-input-label for="mca_case_time" :value="__('思考時間（分）')" />
                        <x-text-input id="mca_case_time" class="block mt-1 w-full" type="number"
                            name="mca_case_time" />
                        <x-input-error :messages="$errors->get('mca_case_time')" class="mt-2" />
                    </div>

                    <!-- ドキュメントURL -->
                    <div class="mt-4">
                        <x-input-label for="mca_case_url" :value="__('ドキュメントURL')" />
                        <x-text-input id="mca_case_url" class="block mt-1 w-full" type="text" name="mca_case_url" />
                        <x-input-error :messages="$errors->get('mca_case_url')" class="mt-2" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('提出') }}</x-primary-button>

                        @if (session('status') === 'profile-updated')
                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                        @endif
                    </div>
                @else 
                    <p>チケットがありません。</p>
                @endif
            </form>

            <a href="{{ route('reserve.index') }}">戻る</a>

        </div>
    </div>
</x-app-layout>
