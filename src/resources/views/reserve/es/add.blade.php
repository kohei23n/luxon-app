<x-app-layout>
    <div>
        <div>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('reserve.esCreate') }}">
                @csrf
                @method('post')

                <p>ES添削チケット：{{ $count->tud_es_count_remaining }}</p>

                {{-- チケットが0より大きい場合は表示 --}}
                @if ($count->tud_es_count_remaining > 0)
                    <!-- 会社 -->
                    <div>
                        <x-input-label for="tes_company_id" :value="__('会社')" />
                        <select id="tes_company_id" name="tes_company_id">
                            <option value="" disabled selected>選択してください</option>
                            @foreach ($companies as $company)
                                <option value="{{ $company->mco_company_id }}">
                                    {{ $company->mco_company_name }}（{{ $company->industry->min_industry_name }}）
                                </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('tes_company_id')" class="mt-2" />
                    </div>

                    <!-- ドキュメントURL -->
                    <div>
                        <x-input-label for="tes_es_url" :value="__('ドキュメントURL')" />
                        <x-text-input id="tes_es_url" class="block mt-1 w-full" type="text" name="tes_es_url" />
                        <x-input-error :messages="$errors->get('tes_es_url')" class="mt-2" />
                    </div>

                    <div>
                        <x-primary-button>{{ __('提出') }}</x-primary-button>

                        @if (session('status') === 'profile-updated')
                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                                {{ __('Saved.') }}</p>
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
