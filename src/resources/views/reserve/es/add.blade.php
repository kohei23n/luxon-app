<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('reserve.esCreate') }}" class="mt-6 space-y-6">
                @csrf
                @method('post')

                <p>ES添削・ケース添削チケット：{{ $plan->tsp_case_study_count }}</p>

                {{-- チケットが0より大きい場合は表示 --}}
                @if ($plan->tsp_case_study_count > 0)
                    <!-- 会社 -->
                    <div class="mt-4">
                        <x-input-label for="mes_company_id" :value="__('会社')" />
                        <select id="mes_company_id" name="mes_company_id">
                            @foreach ($companies as $company)
                                <option value="{{ $company->mco_company_id }}">
                                    {{ $company->mco_company_name }}（{{ $company->industry->min_industry_name }}）
                                </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('mes_company_id')" class="mt-2" />
                    </div>

                    <!-- ドキュメントURL -->
                    <div class="mt-4">
                        <x-input-label for="mes_es_url" :value="__('ドキュメントURL')" />
                        <x-text-input id="mes_es_url" class="block mt-1 w-full" type="text" name="mes_es_url" />
                        <x-input-error :messages="$errors->get('mes_es_url')" class="mt-2" />
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
